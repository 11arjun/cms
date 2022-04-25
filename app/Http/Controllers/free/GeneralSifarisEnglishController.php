<?php

namespace App\Http\Controllers\free;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use GeneralSifarisEnglish;

class GeneralSifarisEnglishController extends Controller
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
        $data = DB::select("SELECT * FROM generalsifarisenglish where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('free/print/GeneralSifarisEnglish_print')->with('data',$data[0]); 
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
        return view('free/GeneralSifarisEnglish_create');
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
          $GeneralSifaris = new \App\GeneralSifarisEnglish($input);
       $GeneralSifaris->save();
       return redirect('GeneralSifarisEnglish');
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

        $GeneralSifaris=\App\GeneralSifarisEnglish::find($id);

     return view('free.GeneralSifarisEnglish_edit')->with('data',$GeneralSifaris);
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
        $GeneralSifariss=\App\GeneralSifarisEnglish::find($id);
            $input = $request->except(['_method','_token','save_general_sifaris_english_data']);
     
   \App\GeneralSifarisEnglish::where('id', $id)
          ->update($input);

       return redirect('GeneralSifarisEnglish');

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
