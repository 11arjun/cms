<?php

namespace App\Http\Controllers\other;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use FarakNameTharNagarikta;

class FarakNameTharNagariktaController extends Controller
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
        $data = DB::select("SELECT * FROM faraknametharnagarikta  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('other/print/FarakNameTharNagarikta_print')->with('data',$data[0]); 
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
        return view('other/FarakNameTharNagarikta_create');
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
          $FarakNameTharNagarikta = new \App\FarakNameTharNagarikta($input);
       $FarakNameTharNagarikta->save();
       return redirect('FarakNameTharNagarikta');
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

        $FarakNameTharNagarikta=\App\FarakNameTharNagarikta::find($id);

     return view('other.FarakNameTharNagarikta_edit')->with('data',$FarakNameTharNagarikta);
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
        $FarakNameTharNagariktas=\App\FarakNameTharNagarikta::find($id);
            $input = $request->except(['_method','_token','save_general_sifaris_data']);
     
   \App\FarakNameTharNagarikta::where('id', $id)
          ->update($input);

       return redirect('FarakNameTharNagarikta');

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
