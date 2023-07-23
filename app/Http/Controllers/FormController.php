<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

function form (){
    return view ('form');
}
function form_data(Request $request){
    // dd($request->all());

    $request->validate([
        'cv' => 'required|mimes:pdf,docs'
    ]);
    $file_name = rand(). time(). $request->file('cv')->getClientOriginalName();
    $request->file('cv')->move(public_path('uploads'),$file_name);

}
}
