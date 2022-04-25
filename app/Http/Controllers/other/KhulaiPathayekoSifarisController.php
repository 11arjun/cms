<?php

namespace App\Http\Controllers\other;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use KhulaiPathayekoSifaris;

class KhulaiPathayekoSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM KhulaiPathayekoSifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('other/print/KhulaiPathayekoSifaris_print')->with('data',$data[0]); 
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
        return view('other/KhulaiPathayekoSifaris_create');
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
          $KhulaiPathayekoSifaris = new \App\KhulaiPathayekoSifaris($input);
       $KhulaiPathayekoSifaris->save();
       return redirect('KhulaiPathayekoSifaris');
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

        $KhulaiPathayekoSifaris=\App\KhulaiPathayekoSifaris::find($id);
     return view('other.KhulaiPathayekoSifaris_edit')->with('data',$KhulaiPathayekoSifaris);
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
         

        $KhulaiPathayekoSifariss=\App\KhulaiPathayekoSifaris::find($id);
            $input = $request->except(['_method','_token','save_khulai_pathayeko_sifaris_data']);
     
   \App\KhulaiPathayekoSifaris::where('id', $id)
          ->update($input);

       return redirect('KhulaiPathayekoSifaris');
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
