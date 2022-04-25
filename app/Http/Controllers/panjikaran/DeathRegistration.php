<?php

namespace App\Http\Controllers\panjikaran;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DeathRegistrations;



class DeathRegistration extends Controller
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
        $data = DB::select("SELECT * FROM deathcertificate  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('panjikaran/print/deathcertificate_print_v1')->with('data',$data[0]); 
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
        return view('panjikaran/deathcertificate_create_v1');
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
          $DeathRegistration = new \App\DeathRegistrations($input);
       $DeathRegistration->save();
       return redirect('deathcertificate');
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
          $DeathRegistrations=\App\DeathRegistrations::find($id);
     return view('panjikaran.DeathRegistrations_edit')->with('i',$DeathRegistrations);
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
   

       $DeathRegistrationss=\App\DeathRegistrations::find($id);
            $input = $request->except(['_method','_token','save_death_registration_data','death_date_ad_nep','death_date_ad']);
     
   \App\DeathRegistrations::where('id', $id)
          ->update($input);


       return redirect('deathcertificate');
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
