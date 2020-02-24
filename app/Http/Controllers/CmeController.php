<?php

namespace App\Http\Controllers;

use App\CmeDetail;
use App\CmeMain;
use Illuminate\Http\Request;
use App\CmeMaster;

class CmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cmemain = CmeMain::create($request->only('cme_masters_id','start_end_date','abtract_of_lecture'));
        $id = $cmemain->id;

        for($i=0;$i<5;$i++){
            $data = ['cme_mains_id' => $id,'topic_of_cme'=>$request['topicofcme_'.$i],'duration_of_cme'=>$request['durationofcme_'.$i],'name_of_speaker'=>$request['nameofthespeaker_'.$i],'desig_quali_speaker'=>$request['designationQualificationspeaker_'.$i],'bio_data_file_id'=>$request['biodataofspeaker_'.$i]];
            CmeDetail::create($data);
        }

        return redirect()->back()
            ->with('flash_message',
                'CME Detail successfully edited.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $cmemaster = CmeMaster::get();

        return view('cme.create',compact('cmemaster'));
    }

}
