<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\API\analyzes;
use App\models\API\Rays;
use Validator;
class apiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
    /* function analzes index*/
    public function analyzesIndex(){
        $analyzes = analyzes::get();
        return response()->json([
            'data'  => $analyzes,
            'msg'   => 'all data analyzes',
            'status'    => true
        ]);
    }
    /* end of function analzes index*/
    /* function analyzesStore */
    public function analyzesStore(Request $request){
        $arr = [
            'name' => 'required',
        ];

        $vaild = Validator::make($request->all(),$arr);
        if($vaild->fails()){
            return response()->json($vaild->errors());
        }

        $analyzes_create = analyzes::create([
            'name'  => $request->name
        ]);
        return response()->json([
            'data' => $analyzes_create,
            'msg'   => 'data created successfuly',
        ]);
    }
    /* end of function analyzesStore */


    /* function analyzesSearch */
    public function analyzesSearch(Request $request){
        $analyzes_search = analyzes::where('name','like','%' . $request->search . '%')->first();
        return response()->json([
            'data'  => $analyzes_search,
            'status'=> true
        ]);
    }
    /* function analyzesSearch */

    /* function rays index */
    public function raysIndex(){
        $rays = Rays::get();
        return response()->json([
            'data'  => $rays,
            'msg'   => 'all data rays',
            'status'=> true
        ]);
    }
    /* end of function rays index */


    /* function rays store */
    function raysStore(Request $request){
        $arr = [
            'name'  => 'required',
        ];

        $vaild = Validator::make($request->all(),$arr);
        if($vaild->fails()){
            return response()->json($vaild->errors());
        }

        $rays_create = Rays::create([
            'name'  => $request->name,
        ]);

        return response()->json([
            'data'  => $rays_create,
            'msg'    => 'data created successfuly',
        ]);
    }

    /* end of function rays store */

    public function raysSearch(Request $request){
        $rays_search = Rays::where('name','like','%' . $request->search . '%')->first();
        return response()->json([
            'data'  => $rays_search,
            'status'=> true
        ]);
    }
}
