<?php

namespace App\Http\Controllers\sangsanstha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use SasthaNabikaranSifaris;

class SasthaNabikaranSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM sasthanabikaransifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('org/print/SasthaNabikaranSifaris_print')->with('data',$data[0]); 
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
         return view('org/sasthanabikaransifaris_create');
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
          $SasthaNabikaranSifaris = new \App\SasthaNabikaranSifaris($input);
       $SasthaNabikaranSifaris->save();
       return redirect('renew');
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
          $SasthaNabikaranSifaris=\App\SasthaNabikaranSifaris::find($id);
     return view('org.SasthaNabikaranSifaris_edit')->with('data',$SasthaNabikaranSifaris);
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
         $SasthaNabikaranSifariss=\App\SasthaNabikaranSifaris::find($id);
            $input = $request->except(['_method','_token','save_sastha_nabikaran_sifaris_data']);
     
   \App\SasthaNabikaranSifaris::where('id', $id)
          ->update($input);

       return redirect('renew');
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
