<?php

namespace App\Http\Controllers\englishformat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use UnmarriedVerification;

class UnmarriedVerificationController extends Controller
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
        $data = DB::select("SELECT * FROM unmarriedverification  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('englishformat/print/UnmarriedVerification_print')->with('data',$data[0]); 
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
        return view('englishformat/UnmarriedVerification_create');
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
          $UnmarriedVerification = new \App\UnmarriedVerification($input);
       $UnmarriedVerification->save();
       return redirect('unmarriedverification');
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

    $UnmarriedVerification=\App\UnmarriedVerification::find($id);

     return view('englishformat.UnmarriedVerification_edit')->with('data',$UnmarriedVerification);
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
          $UnmarriedVerification=\App\UnmarriedVerification::find($id);
            $input = $request->except(['_method','_token','save_unmarried_verification_data']);
     
   \App\UnmarriedVerification::where('id', $id)
          ->update($input);

       return redirect('unmarriedverification');
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
