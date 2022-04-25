<?php

namespace App\Http\Controllers\citizenship;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Citizenship;
class CitizenshipController extends Controller
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
        $data = DB::select("SELECT * FROM citizenship  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('citizenship/print/citizenship_print')->with('data',$data[0]); 
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
         return view('citizenship/Citizenship_create');
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
          $Citizenship = new \App\Citizenship($input);
       $Citizenship->save();
       return redirect('Citizenship');

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

        $Citizenship=\App\Citizenship::find($id);

        return view('citizenship/Citizenship_edit')->with('data',$Citizenship);
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
        $Citizenships=\App\Citizenship::find($id);
            $input = $request->except(['_method','_token','save_citizen_sifaris_data']);
     
   \App\Citizenship::where('id', $id)
          ->update($input);

       return redirect('Citizenship');
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
