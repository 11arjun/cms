<?php

namespace App\Http\Controllers\ghar_jagga_jamin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Muchulka;

class MuchulkaController extends Controller
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
        $data = DB::select("SELECT * FROM muchulka  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('ghar_jagga_jamin/print/muchulka_print')->with('data',$data[0]); 
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
         return view('ghar_jagga_jamin/muchulka_create');
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
          $Muchulka = new \App\Muchulka($input);
       $Muchulka->save();
       return redirect('MuchulkaController');
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
          $Muchulka=\App\Muchulka::find($id);
     return view('ghar_jagga_jamin.Muchulka_edit')->with('data',$Muchulka);
   
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
         $Muchulkas=\App\Muchulka::find($id);
            $input = $request->except(['_method','_token','save_muchulka_data']);
     
   \App\Muchulka::where('id', $id)
          ->update($input);

       return redirect('MuchulkaController');
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
