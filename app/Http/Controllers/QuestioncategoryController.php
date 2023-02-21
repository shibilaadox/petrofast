<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questioncategory;

class QuestioncategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['question_category'] = Questioncategory::all();
        return view('question_category', ['data' => $data]);
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
        //'question_category_ar'       => 'required',
        ]);
        

        $question_category = Questioncategory::updateOrCreate(['id' => $request->id], [
                'question_category' => $request->question_category,
                'question_category_ar' => $request->question_category_ar,
               
              ]);

        return response()->json(['code'=>200, 'message'=>'Category Created successfully','data' => $question_category], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question_category = Questioncategory::find($id);

        return response()->json($question_category);
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
        $question_category = Questioncategory::find($id)->delete();

        return response()->json(['success'=>'Category Deleted successfully']);
    }
}