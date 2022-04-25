<?php

namespace App\Http\Controllers\other;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use FarakFarakNameTharPramanit;

class FarakFarakNameTharPramanitController extends Controller
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
        $data = DB::select("SELECT * FROM farakfaraknametharpramanit  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('other/print/FarakFarakNameTharPramanit_print')->with('data',$data[0]); 
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
        return view('other/FarakFarakNameTharPramanit_create');
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
          $FarakFarakNameTharPramanit = new \App\FarakFarakNameTharPramanit($input);
       $FarakFarakNameTharPramanit->save();
       return redirect('FarakFarakNameTharPramanit');
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

        $FarakFarakNameTharPramanit=\App\FarakFarakNameTharPramanit::find($id);
     return view('other.FarakFarakNameTharPramanit_edit')->with('data',$FarakFarakNameTharPramanit);
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
         

        $FarakFarakNameTharPramanits=\App\FarakFarakNameTharPramanit::find($id);
            $input = $request->except(['_method','_token','save_farak_name_thar_miti_pramanit']);
     
   \App\FarakFarakNameTharPramanit::where('id', $id)
          ->update($input);

       return redirect('FarakFarakNameTharPramanit');
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
