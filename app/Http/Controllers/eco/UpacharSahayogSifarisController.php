<?php

namespace App\Http\Controllers\eco;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use UpacharSahayogSifaris;
class UpacharSahayogSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM upacharsahayogsifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('eco/print/UpacharSahayogSifaris_print')->with('data',$data[0]); 
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
        return view('eco/UpacharSahayogSifaris_create');
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
          $UpacharSahayogSifaris = new \App\UpacharSahayogSifaris($input);
       $UpacharSahayogSifaris->save();
       return redirect('UpacharSahayogSifaris');
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
          $UpacharSahayogSifaris=\App\UpacharSahayogSifaris::find($id);
     return view('eco.UpacharSahayogSifaris_edit')->with('data',$UpacharSahayogSifaris);
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
          $UpacharSahayogSifariss=\App\UpacharSahayogSifaris::find($id);
            $input = $request->except(['_method','_token','save_upachar_sahayog_sifaris_data']);
     
   \App\UpacharSahayogSifaris::where('id', $id)
          ->update($input);

       return redirect('UpacharSahayogSifaris');
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
