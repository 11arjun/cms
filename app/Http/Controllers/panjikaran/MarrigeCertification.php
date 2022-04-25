<?php

namespace App\Http\Controllers\panjikaran;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MarrigeCertifications;


class MarrigeCertification extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //we need to put auth->us_admin logic here for ward wise
        $usr_id=auth()->user()->isAdmin;
        $data = DB::select("SELECT * FROM marriage  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");/**
         * undocumented constant
         **/
    
    
        return view('panjikaran/print/marriage_print_v1')->with('data',$data[0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('panjikaran/marriage_create_v1');
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
          $marriage = new \App\MarrigeCertifications($input);
       $marriage->save();
       return redirect('marriagecertificate');
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
         $MarrigeCertifications=\App\MarrigeCertifications::find($id);
     return view('panjikaran.marriage_edit')->with('data',$MarrigeCertifications);
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
         $MarrigeCertifications=\App\MarrigeCertifications::find($id);
             $input=$request->all();
          $MarrigeCertifications = new \App\MarrigeCertifications($input);
       $MarrigeCertifications->save();
       return redirect('marriagecertificate');
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
