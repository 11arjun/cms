<?php

namespace App\Http\Controllers\bhautiknirman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use NepalSarkarkoNaamamBatoKayemSifaris;

class NepalSarkarkoNaammaBatoKayemController extends Controller
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
        $data = DB::select("SELECT * FROM nepalsarkarko_naamma_bato_kayem_sifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('bhautiknirman/print/NepalSarkarBatoKayem_print')->with('data',$data[0]); 
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
        return view('bhautiknirman/NepalSarkarBatoKayem_create');
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
        $nepalsarkarbatokayem = new \App\NepalSarkarkoNaamamBatoKayemSifaris($input);
        $nepalsarkarbatokayem->save();
       return redirect('nepalsarkarbatokayem');
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

    $nepalsarkarbatokayem=\App\NepalSarkarkoNaamamBatoKayemSifaris::find($id);

     return view('bhautiknirman.NepalSarkarBatoKayem_edit')->with('data',$nepalsarkarbatokayem);
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
          $nepalsarkarbatokayem=\App\NepalSarkarkoNaamamBatoKayemSifaris::find($id);
            $input = $request->except(['_method','_token','update_nepal_sarkar_bato_kayem_data']);
     
   \App\NepalSarkarkoNaamamBatoKayemSifaris::where('id', $id)
          ->update($input);

       return redirect('nepalsarkarbatokayem');
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
