<?php

namespace App\Http\Controllers\samajik_pariwarik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\NataPramanit;
use App\NataPramanitDetail;

class NataPramanitController extends Controller
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
        $data = DB::select("SELECT * FROM nata_pramanits where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM nata_pramanit_details where nata_id=".$data[0]->id." ");
      if($data!=null){
        return view('samajikpariwarik/print/natapramanit_print',compact('detail'))->with('data',$data[0]); 
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
        return view('samajikpariwarik/natapramanit_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input=$request->all();
        $nataPramanit = new NataPramanit;
        $relationdetail = new NataPramanitDetail;
          $nataPramanit->patra_sankya = $request->patra_sankya;
          $nataPramanit->chalani_no = $request->chalani_no;
          $nataPramanit->issued_date = $request->issued_date;
          $nataPramanit->person_title = $request->person_title;
          $nataPramanit->person_name = $request->person_name;
          $nataPramanit->application_date = $request->application_date;
          $nataPramanit->nibedak_name = $request->nibedak_name;
          $nataPramanit->nibedak_address = $request->nibedak_address;
          $nataPramanit->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $nataPramanit->nibedak_nid = $request->nibedak_nid;
          $nataPramanit->user_id = $request->user_id;
          $nataPramanit->save();
          $id = $nataPramanit->id;


          $nata_id = $request->nata_id;
          $relative_name = $request->relative_name;
          $relation = $request->relation;
        for($i=0; $i<count($relative_name); $i++){
              $relation_data = array('nata_id' => $id,
                'relative_name' => $relative_name[$i],
                'relation' => $relation[$i], 
              );
              $relationdetail->create($relation_data); 
          }

       return redirect('natapramanit');
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
        $data= NataPramanit::find($id);
        
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM nata_pramanit_details where nata_id=".$data->id." ");
        
        return view('samajikpariwarik.natapramanit_edit',compact('detail','data'));
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
        $natapramanit= NataPramanit::find($id);
            $input = $request->except(['_method','_token','save_nata_pramanit_data','nata_id','relative_name','relation']);
        $relationdetail = new NataPramanitDetail;
        NataPramanit::where('id', $id)
          ->update($input);
        NataPramanitDetail::where('nata_id',$id)->delete();

          $nata_id = $request->nata_id;
          $relative_name = $request->relative_name;
          $relation = $request->relation;
        for($i=0; $i<count($relative_name); $i++){
              $relation_data = array('nata_id' => $id,
                'relation'=> $relation[$i],
                'relative_name' => $relative_name[$i],
              );
              $relationdetail->create($relation_data);
             
          }

       return redirect('natapramanit');
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
