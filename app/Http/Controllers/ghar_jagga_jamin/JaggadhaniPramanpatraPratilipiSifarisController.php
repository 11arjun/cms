<?php
namespace App\Http\Controllers\ghar_jagga_jamin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use JaggaDhaniPramanpatraPratilipiSifaris;

class JaggadhaniPramanpatraPratilipiSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM jagga_dhani_pramanpatra_pratilipi_sifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('ghar_jagga_jamin/print/JaggadhaniPratilipi_print')->with('data',$data[0]); 
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
        return view('ghar_jagga_jamin/JaggadhaniPratilipi_create');
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
        $jaggadhanipratilipi = new \App\JaggaDhaniPramanpatraPratilipiSifaris($input);
        $jaggadhanipratilipi->save();
       return redirect('jaggadhanipramanpatrasifaris');
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

    $jaggadhanipratilipi=\App\JaggaDhaniPramanpatraPratilipiSifaris::find($id);

     return view('ghar_jagga_jamin.JaggadhaniPratilipi_edit')->with('data',$jaggadhanipratilipi);
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
          $jaggadhanipratilipi=\App\JaggaDhaniPramanpatraPratilipiSifaris::find($id);
            $input = $request->except(['_method','_token','save_sadak_khane_sifaris_data','update_jagga_dhani_pramanpatra_pratilipi_sifaris_data']);
     
   \App\JaggaDhaniPramanpatraPratilipiSifaris::where('id', $id)
          ->update($input);

       return redirect('jaggadhanipramanpatrasifaris');
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
