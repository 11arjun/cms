<?php

namespace App\Http\Controllers\other;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use FarakFarakJanmaMitiPramanit;

class FarakFarakJanmaMitiPramanitController extends Controller
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
        $data = DB::select("SELECT * FROM farakfarakjanmamitipramanit  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('other/print/FarakFarakJanmaMitiPramanit_print')->with('data',$data[0]); 
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
        return view('other/FarakFarakJanmaMitiPramanit_create');
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
          $FarakFarakJanmaMitiPramanit = new \App\FarakFarakJanmaMitiPramanit($input);
       $FarakFarakJanmaMitiPramanit->save();
       return redirect('FarakFarakJanmaMitiPramanit');
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

        $FarakFarakJanmaMitiPramanit=\App\FarakFarakJanmaMitiPramanit::find($id);
     return view('other.FarakFarakJanmaMitiPramanit_edit')->with('data',$FarakFarakJanmaMitiPramanit);
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
         

        $FarakFarakJanmaMitiPramanits=\App\FarakFarakJanmaMitiPramanit::find($id);
            $input = $request->except(['_method','_token','save_farak_farak_janma_miti_pramanit']);
     
   \App\FarakFarakJanmaMitiPramanit::where('id', $id)
          ->update($input);

       return redirect('FarakFarakJanmaMitiPramanit');
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
