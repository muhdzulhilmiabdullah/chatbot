<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keyword;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotmanFactory;

class KeywordController extends Controller
{
    //keyword home
    public function keywordHome(){
    	$keyword = Keyword::all();
    	return view ('keyword_home', compact('$keyword'));
    }

    //add keyword
    public function addKeyword(request $request){
    	$validator = \Validator::make($request->all(),[
    		'keyword_text' => 'required',
    		'response_text' => 'required'
    	]);

    	if ($validator->fails()){
    		return redirect ('/keywordhome')
    		->withInput()
    		->withErrors($validator->errors());
    	}

    	$keyword = new Keyword;
    	$keyword->keyword_text = $request->keyword_text;
    	$keyword->response_text = $request->response_text;
    	$keyword->save();

    	return redirect('/keywordhome  ');
    }

    //delete keyword
    public function deleteKeyword($id){

    	$keyword = Keyword::findorFail($id);
    	$keyword = delete();

    	return redirect('keyword');

    }

    //update keyword
    public function updateKeyword($id){

    	$keyword = Keyword::find($id)
    	->get();

    	return view('keyword_home');
    }

    //get keyword && response 
    public function getKeyword($botman, $keyword_text, $response_text){
        $keyword = Keyword::all();
        $botman->listen($keyword_text)

        if ($keyword_text == $response_text){
            $botman->reply($response_text);
            
        else{
            $botman->reply('The word you type is not in the Database');
        }
    }
}

public function getResponse($botman, $keyword_text, $response_text){
    $response = Keyword::all();
    $botman->listen($keyword_text)

    if($keyword_text == $response_text){
        $botman->reply($response_text);
    }

    else{
        $botman->reply('i dont understand');
    }
}

public function getQuestion($botman, $question_name, $answer, $answer_keyword){
    $question = Question::all();
    $botman->listen($answer_keyword)

    if($answer == $answer_keyword == $question_name){
        $botman->reply('Goodjob'.$answer);
    }

    else{
        $botman->reply('Wrong answer, this is the correct answer'. $answer);
    }
}

public function Grab($driver $passenger $commision $incentives){
    $grab = Grab::all();
    $driver->get($passenger);

    if($driver == $passenger){
        $driver->get($incentives);
        $grab->get($commision);
    }

    else{
        return redirect ('Not available');
    }
}

public function grabPayment($driver $commision $incentives){
    $grab = Grab::all();
    $grab->driver = $request->$driver;
    $grab->commision = $request->commision;
    $grab->incentives = $resuquest->$incentives;
    $grab->save();
}