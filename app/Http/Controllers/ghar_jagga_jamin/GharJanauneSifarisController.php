<?php

namespace App\Http\Controllers\ghar_jagga_jamin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GharJanauneSifaris;
use Illuminate\Support\Facades\DB;

class GharJanauneSifarisController extends Controller
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

        $data = DB::select("SELECT * FROM  ghar_janaune_sifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");

      if($data!=null){
          return view('ghar_jagga_jamin/print/gharjanaunesifaris_print')->with('data',$data[0]);
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
         return view('ghar_jagga_jamin/GharJanauneSifaris_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input=$request->all();
      // dd($input);
        $gharjanaune = new GharJanauneSifaris($input);
     $gharjanaune->save();
     return redirect('GharJanauneSifarisController');
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
      $gharjanaune= GharJanauneSifaris::find($id);
   return view('ghar_jagga_jamin.gharjanaunesifaris_edit')->with('data',$gharjanaune);
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
      $abibahitparmanit= GharJanauneSifaris::find($id);
          $input = $request->except(['_method','_token','save_ghar_janaune_sifaris_data']);

      GharJanauneSifaris::where('id', $id)
        ->update($input);

     return redirect('GharJanauneSifarisController');
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
