<?php

namespace App\Http\Controllers\busines;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use NirmanBebasaye;

class NirmanBebasayeController extends Controller
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
        $data = DB::select("SELECT * FROM nirmanbebasaye  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('busines/print/NirmanBebasaye_print')->with('data',$data[0]); 
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
        return view('busines/NirmanBebasaye_create');
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
          $NirmanBebasaye = new \App\NirmanBebasaye($input);
       $NirmanBebasaye->save();
       return redirect('NirmanBebasaye');
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
          $NirmanBebasaye=\App\NirmanBebasaye::find($id);
     return view('busines.NirmanBebasaye_edit')->with('data',$NirmanBebasaye);
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
          $NirmanBebasayes=\App\NirmanBebasaye::find($id);
            $input = $request->except(['_method','_token','save_non_prof_busines_registration','save_nirman_bebasaye_ejajat']);
     
   \App\NirmanBebasaye::where('id', $id)
          ->update($input);

       return redirect('NirmanBebasaye');
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
