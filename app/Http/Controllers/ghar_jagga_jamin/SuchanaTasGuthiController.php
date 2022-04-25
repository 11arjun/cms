<?php

namespace App\Http\Controllers\ghar_jagga_jamin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Suchanatasguthi;

class SuchanaTasGuthiController extends Controller
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
        $data = DB::select("SELECT * FROM suchanatasguthi  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('ghar_jagga_jamin/print/suchanatasguthi_print')->with('data',$data[0]); 
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
         return view('ghar_jagga_jamin/suchanatasguthi_create');
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
          $Suchanatasguthi = new \App\Suchanatasguthi($input);
       $Suchanatasguthi->save();
       return redirect('SuchanaTasGuthiController');
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
          $Suchanatasguthi=\App\Suchanatasguthi::find($id);

     return view('ghar_jagga_jamin.Suchanatasguthi_edit')->with('data',$Suchanatasguthi);
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
         $Suchanatasguthi=\App\Suchanatasguthi::find($id);
            $input = $request->except(['_method','_token','save_suchanatas_guthi_data']);
     
   \App\Suchanatasguthi::where('id', $id)
          ->update($input);

       return redirect('SuchanaTasGuthiController');
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
