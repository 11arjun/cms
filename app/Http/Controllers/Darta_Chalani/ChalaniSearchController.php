<?php

namespace App\Http\Controllers\Darta_Chalani;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Chalani;

class ChalaniSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('search.chalani_index');
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

          $date=request()->date;
        $ward=auth()->user()->isAdmin;
$data=DB::table('proceeds')->where([
    ['pro_date','=',$date],
    ['ward','=',$ward],
])
->orderby('pro_no','asc')
->get();


return view('search.search_view_chalani')->with('data',$data);
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

    public function chalani_num(Request $request){
        $chalani_number=request()->chalani_num;
        $ward=auth()->user()->isAdmin;
$data=DB::table('proceeds')->where([
    ['pro_no','=',$chalani_number],
    ['ward','=',$ward],
 
])
->orderby('pro_no','asc')
->get();

return view('search.chalani_num_search_result')->with('data',$data);
    }
}
