<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issuecategory;
use App\Models\Issuetype;


class IssuecategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Issuecategory::all();

        return view('categories', ['categories' => $categories]);
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
        'category_name'       => 'required',
        'category_name_ar'       => 'required',
        ]);

        $categories = Issuecategory::updateOrCreate(['id' => $request->id], [
                'category_name' => $request->category_name,
                'category_name_ar' => $request->category_name_ar,
              ]);

        return response()->json(['code'=>200, 'message'=>'Category Created successfully','data' => $categories], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Issuecategory::find($id);

        return response()->json($categories);
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
        $categories = Issuecategory::find($id)->delete();
        Issuetype::where('issue_category',$id)->delete();
        return response()->json(['success'=>'Category Deleted successfully']);
    }
}
