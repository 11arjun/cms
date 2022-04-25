<?php

namespace App\Http\Controllers\ghar_jagga_jamin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use JaggaDhaniPramanPurjamaGharKayem;

class JaggaDhaniPramanPurjamaGharKayemController extends Controller
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
        $data = DB::select("SELECT * FROM jagga_dhani_purjama_gharkayem_sifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('ghar_jagga_jamin/print/JaggadhaniGharSifaris_print')->with('data',$data[0]); 
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
        return view('ghar_jagga_jamin/JaggadhaniGharSifaris_create');
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
        $jaggadhanighar = new \App\JaggaDhaniPramanPurjamaGharKayem($input);
        $jaggadhanighar->save();
       return redirect('jaggadhnigharsifaris');
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

    $jaggadhanighar=\App\JaggaDhaniPramanPurjamaGharKayem::find($id);

     return view('ghar_jagga_jamin.JaggadhaniGharSifaris_edit')->with('data',$jaggadhanighar);
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
          $jaggadhanighar=\App\JaggaDhaniPramanPurjamaGharKayem::find($id);
            $input = $request->except(['_method','_token','update_jagga_dhani_praman_purja_ghar_kayem_data']);
     
   \App\JaggaDhaniPramanPurjamaGharKayem::where('id', $id)
          ->update($input);

       return redirect('jaggadhnigharsifaris');
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
