<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotmanFactory;
use App\Question;

class QuestionController extends Controller
{
    //home to view all the questions
    public function questionHome(){ 
    	$question = Question::all();
    	return view('question_home', compact('$question'));
    }

    //add question
    public function addQuestion(request $request){
    	$validator = \Validator::make($request->all(), [
    		'question_name'=> 'required',
    		'answer'=> 'required',
    		'answer_keyword' => 'required'
    	]);

    	if ($validator->fails()) {
    		return redirect ('question_create')
    		->withInput()
    		->withErrors($validator->errors());
    	}

    	$question = new Question;
    	$question->question = $request->question;
    	$question->answer = $request->answer;
    	$question->answer_keyword = $request->answer_keyword;
    	$question->save();
    	return redirect('question_home')->with('info','Saved!');
    }

    //get question data from database
    public function getQuestion(){
    	$question = DB::table('question')
    	->select('question_name','answer','answer_keyword')
    	->get();

    	$questionname[] = $question->question_name;
    	$answer[] = $question->answer;
    	$answerkeyword = $question->answer_keyword;

    	if ($questionname == $answer_keyword) //not sure 
    	{
    		return view('tinker', compact('question_name', 'answer','answer_keyword'));
    	}
    }

    //delete question
    public function deleteQuestion($id){
        $question = Question::findorFail($id);

        $question = delete();

        return redirect('question');
    }

    //update question 
    public function updateQuestion($id){

        $question = Question::find($id)
        ->get();

        return view ('');
    }

}



