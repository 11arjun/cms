<?php

namespace App\Http\Controllers\busines;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\JetMachine;

class JetMachineController extends Controller
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
        $data = DB::select("SELECT * FROM jet_machines  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");

      if($data!=null){
        return view('busines/print/JetMachine_print')->with('data',$data[0]);
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
        return view('busines/JetMachine_create');
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
          $JetMachine = new JetMachine($input);
       $JetMachine->save();
       return redirect('jetmachine');
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
          $JetMachine= JetMachine::find($id);
          return view('busines.JetMachine_edit')->with('data',$JetMachine);
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
          $JetMachine= JetMachine::find($id);
            $input = $request->except(['_method','_token','save_jetmachine_data']);

          JetMachine::where('id', $id)
          ->update($input);

       return redirect('jetmachine');
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
