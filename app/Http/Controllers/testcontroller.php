<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function faristaction(){
        $namee ='mohammad'; 
$alla =['java','css','php'];

    return view('test',['name'=>$namee,'names'=>$alla]);
    
    }
}
