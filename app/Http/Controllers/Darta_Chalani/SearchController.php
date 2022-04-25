<?php

namespace App\Http\Controllers\Darta_Chalani;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Darta;
// this is for darta to search
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('search.index');
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
$data=DB::table('registers')->where([
    ['reg_date','=',$date],
    ['ward','=',$ward],
    ['karbahi','!=',null]
])
->orderby('reg_no','asc')
->get();


return view('search.search_view_darta')->with('data',$data);

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

    public function darta_num(Request $request){
        $darta_number=request()->darta_num;
       $ward=auth()->user()->isAdmin;
$data=DB::table('registers')->where([
    ['reg_no','=',$darta_number],
    ['ward','=',$ward],
    ['karbahi','!=',null]
])
->orderby('reg_no','asc')
->get();

return view('search.darta_num_search_result')->with('data',$data);
    }
}
