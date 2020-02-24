<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('drtempdataupd',function(){
    
    $tables =['tempfile1','tempfile2','tempfile3','tempfile4','tempfile5','tempfile6'];
    foreach($tables as $value ){
        $tablename = $value;
        $tempfile=DB::table($tablename)->get();
        $prev_srno =1 ;
        
        foreach ($tempfile as $user) {
            // print_r( $user);die;
        if($user->SrNo == '' || $user->SrNo == $prev_srno){
            $value = $prev_srno;
        }
        else{
                $value = $user->SrNo;
                $prev_srno =$value;
        } 
        // $value='tr';
        DB::table($tablename)->where('id',$user->id)->update(['common_id' => $value]);
        }
    }

});

Artisan::command('drfinaldataupd',function(){
    
    
        $tablename = 'finalgroup';
        $tempfile=DB::table($tablename)->get();
        
        foreach ($tempfile as $user) {
            if(!is_null($user->dobsex)){
                $dobsex = explode(' ', $user->dobsex);
                $dob =(isset($dobsex[0]) ?$dobsex[0]:'');
                $gender =(isset($dobsex[1]) ?$dobsex[1]:'');
                DB::table($tablename)->where('id',$user->id)->update(['dob' => $dob,"gender" => $gender]);
            }
        }
    

})->describe('dr updation final');