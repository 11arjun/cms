<?php

namespace App\Http\Controllers\edu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Scholorship;

class ScholorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usr_id=auth()->user()->isAdmin;
        $data = DB::select("SELECT * FROM scholarship  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");

      if($data!=null){

        return view('edu/print/Scholarship_print')->with('data',$data[0]);
    }else{
        echo "No data for this ID";
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('edu/Scholarship_create');
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
        $input=$request->all();
          $Scholarship = new \App\Scholorship($input);
       $Scholarship->save();
       return redirect('scholarship');
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
          $Scholarship=\App\Scholorship::find($id);
     return view('edu.Scholarship_edit')->with('data',$Scholarship);
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
          $Scholarships=\App\Scholorship::find($id);
            $input = $request->except(['_method','_token','scholorship_save']);

   \App\Scholorship::where('id', $id)
          ->update($input);

       return redirect('scholarship');
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
}
