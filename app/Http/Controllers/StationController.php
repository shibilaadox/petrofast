<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Surveyquestion;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();

        return view('stations', ['stations' => $stations]);
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
        'station_code'       => 'required',
        'station_name'       => 'required',
        'station_name_ar'       => 'required',
        'region'       => 'required',
        'lat'       => 'required',
        'lng'       => 'required',
        'address'       => 'required',
        'address_ar'       => 'required',
        ]);

        if($request->file('imgfile'))
        {
           
            $image = $request->file('imgfile');
            $name = url('')."/uploads/".date('mdYHis').$image->getClientOriginalName();
            $destinationPath = base_path().'/public/uploads';
            $image->move($destinationPath, $name);
        }
         
        else
        {
             $name = url('')."/images/Capture.png";
        }

        $station = Station::updateOrCreate(['id' => $request->station_id], 
                ['station_code' => $request->station_code,
                'station_name' => $request->station_name,
                'station_name_ar' => $request->station_name_ar,
                'region'=>$request->region,
                'image'=>$name,
                'phone'=>$request->phone,
                'lat'=>$request->lat,
                'lng'=>$request->lng,
                'address'=>$request->address,
                'address_ar'=>$request->address_ar,
               ]);

        return response()->json(['code'=>200, 'message'=>'Station Created successfully','data' => $station], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $station = Station::find($id);

        return response()->json($station);
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
        $station = Station::find($id)->delete();

        return response()->json(['success'=>'Station Deleted successfully']);
    }

    public function choose_questions()
    {

        $data['id'] = $_GET['id'];
        $data['question'] = Surveyquestion::all();
        $data['station'] = Station::where('id',$data['id'])->get();
        return view('/choose_question',['data'=>$data]);

    }

    public function qstn_update()
    {
        
      $value=$_GET['value'];
      $id = $_GET['id'];

      $stn = Station::find($id);
      $stn->questions = $value;
      $stn->save();

    }
}
