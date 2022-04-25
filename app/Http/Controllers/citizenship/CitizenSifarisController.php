<?php

namespace App\Http\Controllers\citizenship;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Citizensifaris;

class CitizenSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM citizensifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('citizenship/print/citizensifaris_print')->with('data',$data[0]); 
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
         return view('citizenship/CitizenSifaris_create');
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
          $Citizenship = new \App\Citizensifaris($input);
       $Citizenship->save();
       return redirect('CitizenSifaris');
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
         $Citizenship=\App\Citizensifaris::find($id);

        return view('citizenship/CitizenSifaris_edit')->with('data',$Citizenship);
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
         $Citizenships=\App\Citizensifaris::find($id);
            $input = $request->except(['_method','_token','save_citizen_sifaris_data']);
     
   \App\Citizensifaris::where('id', $id)
          ->update($input);

       return redirect('CitizenSifaris');
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
