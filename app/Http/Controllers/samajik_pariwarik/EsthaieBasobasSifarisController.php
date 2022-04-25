<?php

namespace App\Http\Controllers\samajik_pariwarik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\EsthaieBasobasSifaris;
use App\EsthaieBasobasDetail;

class EsthaieBasobasSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM esthaie_basobas_sifaris where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM esthaie_basobas_details where basobas_id=".$data[0]->id." ");
      if($data!=null){
        return view('samajikpariwarik/print/esthaiebasobassifaris_print',compact('detail'))->with('data',$data[0]); 
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
        return view('samajikpariwarik/esthaiebasobassifaris_create');
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
        $esthaiebasobas = new EsthaieBasobasSifaris;
        $relationdetail = new EsthaieBasobasDetail;
          $esthaiebasobas->patra_sankya = $request->patra_sankya;
          $esthaiebasobas->chalani_no = $request->chalani_no;
          $esthaiebasobas->issued_date = $request->issued_date;
          $esthaiebasobas->person_title = $request->person_title;
          $esthaiebasobas->person_name = $request->person_name;
          $esthaiebasobas->sabik_address = $request->sabik_address;
          $esthaiebasobas->houseowner_title = $request->houseowner_title;
          $esthaiebasobas->houseowner_name = $request->houseowner_name;
          $esthaiebasobas->living_starting_date = $request->living_starting_date;
          $esthaiebasobas->basobas_type = $request->basobas_type;
          $esthaiebasobas->citizenship_no = $request->citizenship_no;
          $esthaiebasobas->district_name = $request->district_name;
          $esthaiebasobas->citizenship_issued_date   = $request->citizenship_issued_date ;
          $esthaiebasobas->nibedak_name = $request->nibedak_name;
          $esthaiebasobas->nibedak_address = $request->nibedak_address;
          $esthaiebasobas->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $esthaiebasobas->nibedak_nid = $request->nibedak_nid;
          $esthaiebasobas->user_id = $request->user_id;
          $esthaiebasobas->save();
          $id = $esthaiebasobas->id;


          $toll = $request->toll;
          $batto_name = $request->batto_name;
          $ghar_no = $request->ghar_no;
          $basobas_id = $request->basobas_id;
        for($i=0; $i<count($batto_name); $i++){
              $relation_data = array('basobas_id' => $id,
                'toll'=> $toll[$i],
                'batto_name' => $batto_name[$i],
                'ghar_no' => $ghar_no[$i], 
              );
              $relationdetail->create($relation_data); 
          }

       return redirect('esthaiebasobasSifaris');
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
        $data= EsthaieBasobasSifaris::find($id);
        
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM esthaie_basobas_details where basobas_id=".$data->id." ");
        
        return view('samajikpariwarik.esthaiebasobassifaris_edit',compact('detail','data'));
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
        $esthaiebasobas= EsthaieBasobasSifaris::find($id);
            $input = $request->except(['_method','_token','save_permanent_basobas_data','toll','batto_name','basobas_id','ghar_no']);
        $relationdetail = new EsthaieBasobasDetail;
        EsthaieBasobasSifaris::where('id', $id)
          ->update($input);
        EsthaieBasobasDetail::where('basobas_id',$id)->delete();

          $toll = $request->toll;
          $batto_name = $request->batto_name;
          $ghar_no = $request->ghar_no;
          $basobas_id = $request->basobas_id;
        for($i=0; $i<count($batto_name); $i++){
              $relation_data = array('basobas_id' => $id,
                'toll'=> $toll[$i],
                'batto_name' => $batto_name[$i],
                'ghar_no' => $ghar_no[$i], 
              );
              $relationdetail->create($relation_data);
             
          }

       return redirect('esthaiebasobasSifaris');
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
