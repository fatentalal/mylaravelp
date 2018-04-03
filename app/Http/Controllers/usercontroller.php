<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class usercontroller extends Controller
{
    public function show(){
      //  $results=DB::select('select * from users');
      $results=DB::table('users')->get();
        return view('users',compact('results'));
    }

    public function delete($id){
$deleted=DB::table('users')->where('id','=',$id)->delete();
return redirect()->route('show');

    }
}
