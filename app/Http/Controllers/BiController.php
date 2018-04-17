<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bi;

class BiController extends Controller
{

     public function addBio(request $request){
    	$validator = \Validator::make($request->all(),[
    		'topic' => 'required',
    		'information' => 'required',
            'link' => 'required'
    	]);

    	if ($validator->fails()){
    		return redirect ('/')
    		->withInput()
    		->withErrors($validator->errors());
    	}

    	$bio = new Bi;
    	$bio->topic = $request->topic;
    	$bio->information = $request->information;
        $bio->link = $request->link;
    	$bio->save();

    	return redirect('/bicreate')->with('info','Saved!');
    }
}
