<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surveyquestion;
use App\Models\Questioncategory;

class SurveyquestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['questions'] = Surveyquestion::all();
        $data['question_category'] = Questioncategory::all();

        return view('questions', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $request->validate([
        'question_category'       => 'required',
        'question_category_ar'       => 'required',
        'question_type'       => 'required',
        'question'       => 'required',
        'question_ar'       => 'required',
        'response1'       => 'required',
        'response2'       => 'required',
        'response1_ar'       => 'required',
        'response2_ar'       => 'required',
        ]);

        $questions = Surveyquestion::updateOrCreate(['id' => $request->question_id], 
                ['question_category' => $request->question_category,
                'question_category_ar' => $request->question_category_ar,
                'question_type' => $request->question_type,
                'question'=>$request->question,
                'question_ar'=>$request->question_ar,
                'response1'=>$request->response1,
                'response1_ar'=>$request->response1_ar,
                'response2'=>$request->response2,
                'response2_ar'=>$request->response2_ar,
                
               ]);

        return response()->json(['code'=>200, 'message'=>'Question Created successfully','data' => $questions], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = Surveyquestion::find($id);

        return response()->json($questions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $questions = Surveyquestion::find($id)->delete();

        return response()->json(['success'=>'Question Deleted successfully']);
    }

}
