<?php

namespace App\Http\Controllers\samajik_pariwarik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MritakHakdarSifaris;
use App\MritakHakdarSifarisDetail;

class MirtakHakdarSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM mritak_hakdar_sifaris where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM mritak_hakdar_sifaris_details where mritak_hakdar_id=".$data[0]->id." ");
      if($data!=null){
        return view('samajikpariwarik/print/mirtakhakdarsifaris_print',compact('detail'))->with('data',$data[0]); 
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
        return view('samajikpariwarik/mirtakhakdarsifaris_create');
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
        $mirtakhakdarsifaris = new MritakHakdarSifaris;
        $relationdetail = new MritakHakdarSifarisDetail;
          $mirtakhakdarsifaris->patra_sankya = $request->patra_sankya;
          $mirtakhakdarsifaris->chalani_no = $request->chalani_no;
          $mirtakhakdarsifaris->issued_date = $request->issued_date;
          $mirtakhakdarsifaris->person_title = $request->person_title;
          $mirtakhakdarsifaris->person_name = $request->person_name;
          $mirtakhakdarsifaris->registration_date = $request->registration_date;
          $mirtakhakdarsifaris->sabik_address = $request->sabik_address;
          $mirtakhakdarsifaris->hakdar_sankya = $request->hakdar_sankya;
          $mirtakhakdarsifaris->registration_no = $request->registration_no;
          $mirtakhakdarsifaris->death_person_title = $request->death_person_title;
          $mirtakhakdarsifaris->death_person_name = $request->death_person_name;
          $mirtakhakdarsifaris->nibedak_name = $request->nibedak_name;
          $mirtakhakdarsifaris->nibedak_address = $request->nibedak_address;
          $mirtakhakdarsifaris->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $mirtakhakdarsifaris->nibedak_nid = $request->nibedak_nid;
          $mirtakhakdarsifaris->user_id = $request->user_id;
          $mirtakhakdarsifaris->save();
          $id = $mirtakhakdarsifaris->id;


          $mritak_hakdar_id = $request->mritak_hakdar_id;
          $hakdar_full_name = $request->hakdar_full_name;
          $relation = $request->relation;
          $father_name = $request->father_name;
          $citizenship_no = $request->citizenship_no;
          $house_no = $request->house_no;
          $kitta_no = $request->kitta_no;
          $batto_name = $request->batto_name;
        for($i=0; $i<count($hakdar_full_name); $i++){
              $relation_data = array('mritak_hakdar_id' => $id,
                'hakdar_full_name' => $hakdar_full_name[$i],
                'relation' => $relation[$i],
                'father_name' => $father_name[$i],
                'citizenship_no' => $citizenship_no[$i],
                'house_no' => $house_no[$i],
                'kitta_no' => $kitta_no[$i],
                'batto_name' => $batto_name[$i],
              );
              $relationdetail->create($relation_data); 
          }

       return redirect('mirtakhakdarsifaris');
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
        $data= MritakHakdarSifaris::find($id);
        
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM mritak_hakdar_sifaris_details where mritak_hakdar_id=".$data->id." ");
        
        return view('samajikpariwarik.mirtakhakdarsifaris_edit',compact('detail','data'));
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
        $natapramanit= MritakHakdarSifaris::find($id);
            $input = $request->except(['_method','_token','save_mritak_hakdar_sifaris_data','mritak_hakdar_id','hakdar_full_name','relation','father_name','citizenship_no','house_no','kitta_no','batto_name']);
        $relationdetail = new MritakHakdarSifarisDetail;
        MritakHakdarSifaris::where('id', $id)
          ->update($input);
        MritakHakdarSifarisDetail::where('mritak_hakdar_id',$id)->delete();

          $mritak_hakdar_id = $request->mritak_hakdar_id;
          $hakdar_full_name = $request->hakdar_full_name;
          $relation = $request->relation;
          $father_name = $request->father_name;
          $citizenship_no = $request->citizenship_no;
          $house_no = $request->house_no;
          $kitta_no = $request->kitta_no;
          $batto_name = $request->batto_name;
        for($i=0; $i<count($hakdar_full_name); $i++){
              $relation_data = array('mritak_hakdar_id' => $id,
                'hakdar_full_name' => $hakdar_full_name[$i],
                'relation' => $relation[$i],
                'father_name' => $father_name[$i],
                'citizenship_no' => $citizenship_no[$i],
                'house_no' => $house_no[$i],
                'kitta_no' => $kitta_no[$i],
                'batto_name' => $batto_name[$i],
              );
              $relationdetail->create($relation_data); 
          }

       return redirect('mirtakhakdarsifaris');
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
