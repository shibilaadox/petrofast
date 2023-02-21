<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issuetype;
use App\Models\Issuecategory;

class IssuetypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Issuetype::get();

        $category = Issuecategory::all(); 

        return view('types', ['types' => $types , 'category' => $category]);
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
        'issue_category'       => 'required',
        'issue_type'       => 'required',
        'issue_type_ar'       => 'required',
        ]);

        $types = Issuetype::updateOrCreate(['id' => $request->id], [
                'issue_category' => $request->issue_category,
                'issue_type' => $request->issue_type,
                'issue_type_ar' => $request->issue_type_ar,
              ]);

        return response()->json(['code'=>200, 'message'=>'Type Created successfully','data' => $types], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = Issuetype::find($id);

        return response()->json($types);
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
        $types = Issuetype::find($id)->delete();

        return response()->json(['success'=>'Type Deleted successfully']);
    }
}
