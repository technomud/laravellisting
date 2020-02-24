<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\File as CustomUploadFile;
use App\UserFile;
use App\Qualification;
use App\Salutation;
use App\Helpers\GeneralHelper;
use Spatie\Permission\Models\Role;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DrListExport;

class DoctorController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isAdmin'])->except('showAll'); //isAdmin middleware lets only
        // users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all users and pass it to the view

        return view('doctors.listing');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $salutation = Salutation::get();
       $gender = GeneralHelper::getGender();
       $roles = Role::get();
       $reg_id = User::max('reg_id')+1;
       $qualification = Qualification::get();
       return view('doctors.create',compact('salutation','gender','roles','reg_id','qualification'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       /*  $this->validate($request, [
            'first_name'=>'required|max:120',
            'last_name'=>'required|max:120',
             'email'=>'required|email:users',
             
        ]);*/

        $password = str_random(8);
        $request->request->add(['password' => bcrypt($password)]);

        $reg_id = User::max('reg_id')+1;
        $request->request->add(['reg_id' => $reg_id]);

        $user = User::create($request->only('reg_id','first_name','middle_name','last_name', 'email','aadhar_no','pan_no','mobile','salutation_id','address','phone','gender','reg_date','dob','password'));

        $roles = $request['roles']; //Retrieving the roles field
        //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();            
            $user->assignRole($role_r); //Assigning role to user
            }
        }  

        return redirect()->route('doctors.index')
            ->with('flash_message',
             'Doctors successfully added.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user = User::findOrFail($id);
       $salutation = Salutation::get();
       $gender = GeneralHelper::getGender();
       $qualification = Qualification::get();
       return view('doctors.edit', compact('user','salutation','gender','qualification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id); //Get role specified by id

      //Validate name, email and password fields  
      /*  $this->validate($request, [
            'first_name'=>'required|max:120',
            'last_name'=>'required|max:120',
            'email'=>'email|unique:users,email,'.$id,
             
        ]);*/
        
        $input = $request->only(['first_name','middle_name','last_name', 'email','aadhar_no','pan_no','mobile','salutation_id','address','phone','gender','reg_date','dob']); //Retreive the name, email and password fields
        
        $user->fill($input)->save();

        if(!empty($request->qualification)) {
            foreach ($request->qualification as $file_value) {

                $files = $file_value->store('qualification');
                $file_data = ['name' => $file_value->getClientOriginalName(),
                              'path' => $files, 'files_group_id' => 1];
                $customuploadfile = new CustomUploadFile;
                $file = $customuploadfile->create($file_data)->id;
                $user_file_data = ['file_id' => $file, 'user_id' => $id];
                $userfile = new UserFile;
                $userfile->create($user_file_data)->save();
            }
        }
        
        return redirect()->back()
            ->with('flash_message',
             'Doctor Detail successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showAll(Request $request){
        $start = $request->start;
        $length = $request->length;
        $search = $request->search['value'];

        $users = User::role('doctor')
        ->whereRaw('(first_name like "%'.$search.'%" or middle_name  like  "%'.$search.'%" or last_name like "%'.$search.'%" or email like "%'.$search.'%" or mobile like "%'.$search.'%" or reg_id like "%'.$search.'%") and reg_id <> 0')           
        ->select('id','reg_id','email','mobile','first_name','middle_name','last_name');
        
        if( $start!="" && $length !="")
            $users = $users->offset($start)->limit($length)->get();
        else
            $users = $users->get();
            
        $count = User::role('doctor')
        ->whereRaw('first_name like "%'.$search.'%" or middle_name  like  "%'.$search.'%" or last_name like "%'.$search.'%" or email like "%'.$search.'%" or mobile like "%'.$search.'%" or reg_id like "%'.$search.'%"')           
        ->count();

        return ['data' => $users,'recordsFiltered' => $count,'recordsTotal' => $count];
    }
 

    public function exportCSV(){

        $data = $this->exportcollection();      
        $filename = "drlist.csv";
        $fp = fopen('php://output', 'w');

        $header = ['Registration ID','EMAIL','FIRST NAME','MIDDLE NAME','LAST NAME','MOBILE'];
        header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename='.$filename);

        fputcsv($fp, $header);
        foreach ($data as   $row) {
            fputcsv($fp, $row);
        } 
    }

      public function exportcollection()
      {

        $data =   User::role('doctor')->select('reg_id','email','first_name','middle_name','last_name','mobile')->get()->toArray(); 
        return $data;
      }
}
