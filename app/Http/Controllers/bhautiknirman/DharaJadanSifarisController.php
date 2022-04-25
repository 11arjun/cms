<?php

namespace App\Http\Controllers\bhautiknirman;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DharaJadanSifaris;
use App\DharaJadanSifarisDetail;

class DharaJadanSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM dhara_jadan_sifaris where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM dhara_jadan_sifaris_detail where dhara_jadan_sifaris_id=".$data[0]->id." ");
      if($data!=null){
        return view('bhautiknirman/print/DharaJadanSifaris_print',compact('detail'))->with('data',$data[0]); 
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
        return view('bhautiknirman/DharaJadanSifaris_create');
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
        $dharajadan = new DharaJadanSifaris;
        $dharajadandetail = new DharaJadanSifarisDetail;
          $dharajadan->patra_sankya = $request->patra_sankya;
          $dharajadan->chalani_no = $request->chalani_no;
          $dharajadan->issued_date = $request->issued_date;
          $dharajadan->office_chairman = $request->office_chairman;
          $dharajadan->office_name = $request->office_name;
          $dharajadan->sabik_address = $request->sabik_address;
          $dharajadan->person_title = $request->person_title;
          $dharajadan->person_name = $request->person_name;
          
          $dharajadan->kitta_no = $request->kitta_no;
          // dd($dharajadan);
          $dharajadan->house_approve_date = $request->house_approve_date;
          $dharajadan->construction_type = $request->construction_type;
          $dharajadan->khanepani_line_name = $request->khanepani_line_name;

         
          $dharajadan->user_id = $request->user_id;
          // dd($dharajadan);
          $dharajadan->nibedak_name = $request->nibedak_name;
          $dharajadan->nibedak_address = $request->nibedak_address;
          $dharajadan->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $dharajadan->nibedak_nid = $request->nibedak_nid;
          $dharajadan->save();
          $id = $dharajadan->id;


          $dhara_jadan_kitta_no = $request->dhara_jadan_kitta_no;
      
          $dhara_jadan_sifaris_id = $request->dhara_jadan_sifaris_id;
          // $count=1;
          
        for($i=0; $i<count($dhara_jadan_kitta_no); $i++){
              $jadan_detail_data = array('dhara_jadan_sifaris_id' => $id,
                
                'dhara_jadan_kitta_no' => $dhara_jadan_kitta_no[$i],
                
              );
              $dharajadandetail->create($jadan_detail_data); 
              // $count++;
          }

       return redirect('dharajadansifaris');
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
        $data= DharaJadanSifaris::find($id);
        
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM dhara_jadan_sifaris_detail where dhara_jadan_sifaris_id=".$data->id." ");
        
        return view('bhautiknirman.DharajadanSifaris_edit',compact('detail','data'));
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
        $dharajadan= DharaJadanSifaris::find($id);
            $input = $request->except(['_method','_token','dhara_jadan_sifaris_id','dhara_jadan_kitta_no','update_dhara_jadan_sifaris_data']);
        $dharajadandetail = new DharaJadanSifarisDetail;
        DharaJadanSifaris::where('id', $id)
          ->update($input);
        DharaJadanSifarisDetail::where('dhara_jadan_sifaris_id',$id)->delete();

          $dhara_jadan_kitta_no = $request->dhara_jadan_kitta_no;
          $dhara_jadan_sifaris_id = $request->dhara_jadan_sifaris_id;
        for($i=0; $i<count($dhara_jadan_kitta_no); $i++){
              $jadan_detail_data = array('dhara_jadan_sifaris_id' => $id,
                'dhara_jadan_kitta_no'=> $dhara_jadan_kitta_no[$i],
                
              );
              $dharajadandetail->create($jadan_detail_data);
             
          }

       return redirect('dharajadansifaris');
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
