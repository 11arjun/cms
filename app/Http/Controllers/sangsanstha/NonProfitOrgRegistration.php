<?php

namespace App\Http\Controllers\sangsanstha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Nonprofit;

class NonProfitOrgRegistration extends Controller
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
        $data = DB::select("SELECT * FROM nonprofit  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('org/print/nonprofit_print')->with('data',$data[0]); 
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
        return view('org/nonprofit_create');
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
          $Nonprofit = new \App\Nonprofit($input);
       $Nonprofit->save();
       return redirect('nonprofit');
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
          $nonprofit=\App\Nonprofit::find($id);
     return view('org.nonprofit_edit')->with('data',$nonprofit);
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
          $nonprofits=\App\Nonprofit::find($id);
            $input = $request->except(['_method','_token','save_non_prof_org_registration']);
     
   \App\Nonprofit::where('id', $id)
          ->update($input);

       return redirect('nonprofit');
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
