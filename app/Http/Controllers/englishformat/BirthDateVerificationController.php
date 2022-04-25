<?php

namespace App\Http\Controllers\englishformat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use BirthDateVerification;

class BirthDateVerificationController extends Controller
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
        $data = DB::select("SELECT * FROM birth_date_verifications  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");

      if($data!=null){
        return view('englishformat/print/birthdateverification_print')->with('data',$data[0]);
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
        return view('englishformat/birthdateverification_create');
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
          $BirthVerification = new \App\BirthDateVerification($input);
       $BirthVerification->save();
       return redirect('birthdateverification');
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

        $birthVerification=\App\BirthDateVerification::find($id);
     return view('englishformat.birthdateverification_edit')->with('data',$birthVerification);
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


        $birthVerification=\App\BirthDateVerification::find($id);
            $input = $request->except(['_method','_token','save_birth_date_verification_data']);

   \App\BirthDateVerification::where('id', $id)
          ->update($input);

       return redirect('birthdateverification');
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
