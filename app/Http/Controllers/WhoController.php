<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhoController extends Controller
{
  public function addWho(request $request){
    	$validator = \Validator::make($request->all(),[
    		'who' => 'required',
    		'description' => 'required'
    	]);

    	if ($validator->fails()){
    		return redirect ('/whocreate')
    		->withInput()
    		->withErrors($validator->errors());
    	}

    	$who = new Who;
    	$who->who = $request->who;
    	$who->description = $request->description;
    	$who->save();

    	return redirect('/whocreate')->with('info','Saved!');
    }
}
