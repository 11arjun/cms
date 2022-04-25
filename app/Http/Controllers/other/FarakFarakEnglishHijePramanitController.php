<?php

namespace App\Http\Controllers\other;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use KothaKhaliSifaris;

class FarakFarakEnglishHijePramanitController extends Controller
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
        $data = DB::select("SELECT * FROM farakfarakenglishhijepramanit  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('other/print/FarakFarakEnglishHijePramanit_print')->with('data',$data[0]); 
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
        return view('other/FarakFarakEnglishHijePramanit_create');
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
          $FarakFarakEnglishHijePramanit = new \App\FarakFarakEnglishHijePramanit($input);
       $FarakFarakEnglishHijePramanit->save();
       return redirect('FarakFarakEnglishHijePramanit');
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

        $FarakFarakEnglishHijePramanit=\App\FarakFarakEnglishHijePramanit::find($id);
     return view('other.FarakFarakEnglishHijePramanit_edit')->with('data',$FarakFarakEnglishHijePramanit);
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
         

        $FarakFarakEnglishHijePramanits=\App\FarakFarakEnglishHijePramanit::find($id);
            $input = $request->except(['_method','_token','save_farak_farak_english_hije_data']);
     
   \App\FarakFarakEnglishHijePramanit::where('id', $id)
          ->update($input);

       return redirect('FarakFarakEnglishHijePramanit');
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
