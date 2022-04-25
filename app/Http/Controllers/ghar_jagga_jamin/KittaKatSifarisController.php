<?php

namespace App\Http\Controllers\ghar_jagga_jamin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KittaKatSifaris;
use App\KittaKatJaggaBibaran;
class KittaKatSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM kitta_kat_sifaris where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM kitta_kat_jagga_bibaran where kitta_kat_id=".$data[0]->id." ");
      if($data!=null){
        return view('ghar_jagga_jamin/print/KittaKatSifaris_print',compact('detail'))->with('data',$data[0]); 
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
      
        return view('ghar_jagga_jamin/KittaKatSifaris_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $input=$request->all();
        $kittakat = new KittaKatSifaris;
        $kittakatdetail = new KittaKatJaggaBibaran;
          $kittakat->patra_sankya = $request->patra_sankya;
          $kittakat->chalani_no = $request->chalani_no;
          $kittakat->issued_date = $request->issued_date;
          $kittakat->office_chairman = $request->office_chairman;
          $kittakat->office_name = $request->office_name;
          $kittakat->sabik_address = $request->sabik_address;
          $kittakat->person_title = $request->person_title;
          $kittakat->person_name = $request->person_name;
          
          $kittakat->jagga_location = $request->jagga_location;
          // dd($dharajadan);
          $kittakat->jagga_area = $request->jagga_area;
          $kittakat->ghaderi_area = $request->ghaderi_area;
          $kittakat->ghar_total_area = $request->ghar_total_area;
          $kittakat->last_floor_area = $request->last_floor_area;
          $kittakat->paune_far = $request->paune_far;
          $kittakat->sifaris_reason = $request->sifaris_reason;
          $kittakat->technician_name = $request->technician_name;

         
          $kittakat->user_id = $request->user_id;
          // dd($dharajadan);
          $kittakat->nibedak_name = $request->nibedak_name;
          $kittakat->nibedak_address = $request->nibedak_address;
          $kittakat->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $kittakat->nibedak_nid = $request->nibedak_nid;
          $kittakat->save();
          $id = $kittakat->id;

          $seat_no = $request->seat_no;
          $kitta_no = $request->kitta_no;
          $area = $request->area;
      
          $kitta_kat_id = $request->kitta_kat_id;
        for($i=0; $i<count($kitta_no); $i++){
              $kitta_detail_data = array('kitta_kat_id' => $id,
                'seat_no' => $seat_no[$i],
                'area' => $area[$i],
                'kitta_no' => $kitta_no[$i],
                
              );
              $kittakatdetail->create($kitta_detail_data); 
          }

       return redirect('kittakatsifaris');
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
        $data= KittaKatSifaris::find($id);
        
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM kitta_kat_jagga_bibaran where kitta_kat_id=".$data->id." ");
        
        return view('ghar_jagga_jamin.KittaKatSifaris_edit',compact('detail','data'));
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
        $kittakat= KittaKatSifaris::find($id);
            $input = $request->except(['_method','_token','kitta_kat_id','kitta_no','seat_no','area','update_kitta_kat_sifaris_data']);
        $kittakatdetail = new KittaKatJaggaBibaran;
        KittaKatSifaris::where('id', $id)
          ->update($input);
        KittaKatJaggaBibaran::where('kitta_kat_id',$id)->delete();

          $kitta_no = $request->kitta_no;
          $seat_no = $request->seat_no;
          $area = $request->area;
          $kitta_kat_id = $request->kitta_kat_id;
        for($i=0; $i<count($kitta_no); $i++){
              $kitta_detail_data = array('kitta_kat_id' => $id,
              'kitta_no'=> $kitta_no[$i],
              'seat_no'=> $seat_no[$i],
              'area'=> $area[$i],
                
              );
              $kittakatdetail->create($kitta_detail_data);
             
          }

       return redirect('kittakatsifaris');
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
