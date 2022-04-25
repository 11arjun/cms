<?php

namespace App\Http\Controllers\free;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CourtFeeNarakhneSifaris;

class CourtFeeNarakhneController extends Controller
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
        $data = DB::select("SELECT * FROM court_fee_narakhne_sifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");

      if($data!=null){
        return view('free/print/CourtFeeNarakhneSifaris_print')->with('data',$data[0]);
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
        return view('free/CourtFeeNarakhneSifaris_create');
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
          $courtfee = new CourtFeeNarakhneSifaris($input);
       $courtfee->save();
       return redirect('courtfeenarakhne');
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
        $courtfee= CourtFeeNarakhneSifaris::find($id);
     return view('free.CourtFeeNarakhneSifaris_edit')->with('data',$courtfee);
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
        $courtfee = CourtFeeNarakhneSifaris::find($id);
            $input = $request->except(['_method','_token','save_courtfee_data']);

        CourtFeeNarakhneSifaris::where('id', $id)
          ->update($input);

       return redirect('courtfeenarakhne');
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
