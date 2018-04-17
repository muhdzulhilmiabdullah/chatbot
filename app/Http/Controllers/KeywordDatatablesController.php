<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DataTables;

use App\Keyword;	

class QuestionDatatablesController extends Controller
{

	/**

     * Displays front end view

     *

     * @return \Illuminate\View\View

     */

    public function index()

    {

    	return view('keyword_home');

    }

    /**

     * Process ajax request.

     *

     * @return \Illuminate\Http\JsonResponse

     */

    public function getData()

    {
        //the datatables will return the data of Employee(the model) and query it.
        return DataTables::of(Keyword::query())->make(true);

    }

}
    
