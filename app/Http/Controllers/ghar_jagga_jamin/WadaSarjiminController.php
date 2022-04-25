<?php

namespace App\Http\Controllers\ghar_jagga_jamin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Wadasarjimin;

class WadaSarjiminController extends Controller
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
        $data = DB::select("SELECT * FROM wadasarjimin  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('ghar_jagga_jamin/print/wadasarjimin_print')->with('data',$data[0]); 
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
         return view('ghar_jagga_jamin/wadasarjimin_create');
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
          $Wadasarjimin = new \App\Wadasarjimin($input);
       $Wadasarjimin->save();
       return redirect('WadaSarjiminController');
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
           $Wadasarjimin=\App\Wadasarjimin::find($id);
     return view('ghar_jagga_jamin.Wadasarjimin_edit')->with('data',$Wadasarjimin);
   
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
         $Wadasarjimins=\App\Wadasarjimin::find($id);
            $input = $request->except(['_method','_token','save_sarjimin_sifaris_data']);
     
   \App\Wadasarjimin::where('id', $id)
          ->update($input);

       return redirect('WadaSarjiminController');
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
