<?php

namespace App\Http\Controllers\samajik_pariwarik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AsthaieBasobasSifaris;
use App\BasobasSifarisDetail;

class AsthaieBasobasSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM asthaie_basobas_sifaris where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM basobas_sifaris_details where basobas_id=".$data[0]->id." ");
      if($data!=null){
        return view('samajikpariwarik/print/asthaiebasobassifaris_print',compact('detail'))->with('data',$data[0]); 
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
        return view('samajikpariwarik/asthaiebasobassifaris_create');
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
        $asthaiebasobas = new AsthaieBasobasSifaris;
        $relationdetail = new BasobasSifarisDetail;
          $asthaiebasobas->patra_sankya = $request->patra_sankya;
          $asthaiebasobas->chalani_no = $request->chalani_no;
          $asthaiebasobas->issued_date = $request->issued_date;
          $asthaiebasobas->person_title = $request->person_title;
          $asthaiebasobas->person_name = $request->person_name;
          $asthaiebasobas->sabik_address = $request->sabik_address;
          $asthaiebasobas->houseowner_title = $request->houseowner_title;
          $asthaiebasobas->houseowner_name = $request->houseowner_name;
          $asthaiebasobas->living_starting_date = $request->living_starting_date;
          $asthaiebasobas->basobas_type = $request->basobas_type;
          $asthaiebasobas->citizenship_no = $request->citizenship_no;
          $asthaiebasobas->district_name = $request->district_name;
          $asthaiebasobas->citizenship_issued_date   = $request->citizenship_issued_date ;
          $asthaiebasobas->nibedak_name = $request->nibedak_name;
          $asthaiebasobas->nibedak_address = $request->nibedak_address;
          $asthaiebasobas->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $asthaiebasobas->nibedak_nid = $request->nibedak_nid;
          $asthaiebasobas->user_id = $request->user_id;
          $asthaiebasobas->save();
          $id = $asthaiebasobas->id;


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

       return redirect('asthaiebasobasSifaris');
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
        $data= AsthaieBasobasSifaris::find($id);
        
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM basobas_sifaris_details where basobas_id=".$data->id." ");
        
        return view('samajikpariwarik.asthaiebasobassifaris_edit',compact('detail','data'));
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
        $asthaiebasobas= AsthaieBasobasSifaris::find($id);
            $input = $request->except(['_method','_token','save_temporary_basobas_data','toll','batto_name','basobas_id','ghar_no']);
        $relationdetail = new BasobasSifarisDetail;
        AsthaieBasobasSifaris::where('id', $id)
          ->update($input);
        BasobasSifarisDetail::where('basobas_id',$id)->delete();

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

       return redirect('asthaiebasobasSifaris');
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
