<?php

namespace App\Http\Controllers\samajik_pariwarik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AbibahitPramanit;

class AbibahitPramanitController extends Controller
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
        $data = DB::select("SELECT * FROM abibahit_pramanits  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");

      if($data!=null){
        return view('samajikpariwarik/print/abibahitpramanit_print')->with('data',$data[0]);
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
        return view('samajikpariwarik/abibahitpramanit_create');
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
          $abibahitparmanit = new AbibahitPramanit($input);
       $abibahitparmanit->save();
       return redirect('abibahitpramanit');
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
        $abibahitparmanit= AbibahitPramanit::find($id);
     return view('samajikpariwarik.abibahitpramanit_edit')->with('data',$abibahitparmanit);
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


        $abibahitparmanit= AbibahitPramanit::find($id);
            $input = $request->except(['_method','_token','save_abibahit_pramanit_data']);

        AbibahitPramanit::where('id', $id)
          ->update($input);

       return redirect('abibahitpramanit');
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
