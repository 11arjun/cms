<?php

namespace App\Http\Controllers\bhautiknirman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use SadakKhaneSifaris;

class SadakKhaneSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM sadak_khane_sifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('bhautiknirman/print/SadakKhaneSifaris_print')->with('data',$data[0]); 
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
        return view('bhautiknirman/SadakKhaneSifaris_create');
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
        $sadakkhanesifaris = new \App\SadakKhaneSifaris($input);
        $sadakkhanesifaris->save();
       return redirect('sadakkhanesifaris');
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

    $sadakkhanesifaris=\App\SadakKhaneSifaris::find($id);

     return view('bhautiknirman.SadakKhaneSifaris_edit')->with('data',$sadakkhanesifaris);
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
          $sadakkhanesifaris=\App\SadakKhaneSifaris::find($id);
            $input = $request->except(['_method','_token','save_sadak_khane_sifaris_data','update_sadak_khane_sifaris_data']);
     
   \App\SadakKhaneSifaris::where('id', $id)
          ->update($input);

       return redirect('sadakkhanesifaris');
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
