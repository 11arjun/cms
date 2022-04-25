<?php

namespace App\Http\Controllers\free;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MohiLagatKattaSifaris;

class MohiLagatKattaController extends Controller
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
        $data = DB::select("SELECT * FROM mohi_lagat_katta_sifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");

      if($data!=null){
        return view('free/print/MohiLagatKattaSifaris_print')->with('data',$data[0]);
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
        return view('free/MohiLagatKattaSifaris_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $input=$request->all();
          $mohilagat = new MohiLagatKattaSifaris($input);
       $mohilagat->save();
       return redirect('mohilagatkatta');
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
        //dd("ajschbasc");
        $mohilagat = MohiLagatKattaSifaris::find($id);
     return view('free.MohiLagatKattaSifaris_edit')->with('data',$mohilagat);
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
        $mohilagat = MohiLagatKattaSifaris::find($id);
            $input = $request->except(['_method','_token','save_mohilagat_data']);

        MohiLagatKattaSifaris::where('id', $id)
          ->update($input);

       return redirect('mohilagatkatta');
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
