<?php
namespace App\Http\Controllers\bhautiknirman;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\BijuliJadanSifaris;
use App\BijuliJadanSifarisDetail;

class BijuliJadanSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM bijuli_jadan_sifaris where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM bijuli_jadan_sifaris_detail where bijuli_jadan_sifaris_id=".$data[0]->id." ");
      if($data!=null){
        return view('bhautiknirman/print/BijuliJadanSifaris_print',compact('detail'))->with('data',$data[0]); 
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
      
        return view('bhautiknirman/BijuliJadanSifaris_create');

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
        $bijulijadan = new BijuliJadanSifaris;
        $bijulijadandetail = new BijuliJadanSifarisDetail;
          $bijulijadan->patra_sankya = $request->patra_sankya;
          $bijulijadan->chalani_no = $request->chalani_no;
          $bijulijadan->issued_date = $request->issued_date;
          $bijulijadan->office_chairman = $request->office_chairman;
          $bijulijadan->office_name = $request->office_name;
          $bijulijadan->sabik_address = $request->sabik_address;
          $bijulijadan->person_title = $request->person_title;
          $bijulijadan->person_name = $request->person_name;
          
          $bijulijadan->kitta_no = $request->kitta_no;
    
          $bijulijadan->house_approve_date = $request->house_approve_date;
          $bijulijadan->construction_type = $request->construction_type;
          $bijulijadan->electricity_line_name = $request->electricity_line_name;
          $bijulijadan->electricity_capacity = $request->electricity_capacity;

         
          $bijulijadan->user_id = $request->user_id;
          // dd($dharajadan);
          $bijulijadan->nibedak_name = $request->nibedak_name;
          $bijulijadan->nibedak_address = $request->nibedak_address;
          $bijulijadan->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $bijulijadan->nibedak_nid = $request->nibedak_nid;
          $bijulijadan->save();
          $id = $bijulijadan->id;


          $bijuli_jadan_kitta_no = $request->bijuli_jadan_kitta_no;
      
          $bijuli_jadan_sifaris_id = $request->bijuli_jadan_sifaris_id;
        for($i=0; $i<count($bijuli_jadan_kitta_no); $i++){
              $jadan_detail_data = array('bijuli_jadan_sifaris_id' => $id,
                
                'bijuli_jadan_kitta_no' => $bijuli_jadan_kitta_no[$i],
                
              );
              $bijulijadandetail->create($jadan_detail_data); 
          }

       return redirect('bijulijadansifaris');
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
        $data= BijuliJadanSifaris::find($id);
        
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM bijuli_jadan_sifaris_detail where bijuli_jadan_sifaris_id=".$data->id." ");
        
        return view('bhautiknirman.BijuliJadanSifaris_edit',compact('detail','data'));
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
        $bijulijadan= BijuliJadanSifaris::find($id);
            $input = $request->except(['_method','_token','bijuli_jadan_sifaris_id','bijuli_jadan_kitta_no','update_bijuli_jadan_sifaris_data']);
        $bijulijadandetail = new BijuliJadanSifarisDetail;
        BijuliJadanSifaris::where('id', $id)
          ->update($input);
        BijuliJadanSifarisDetail::where('bijuli_jadan_sifaris_id',$id)->delete();

          $bijuli_jadan_kitta_no = $request->bijuli_jadan_kitta_no;
          $bijuli_jadan_sifaris_id = $request->bijuli_jadan_sifaris_id;
        for($i=0; $i<count($bijuli_jadan_kitta_no); $i++){
              $jadan_detail_data = array('bijuli_jadan_sifaris_id' => $id,
                'bijuli_jadan_kitta_no'=> $bijuli_jadan_kitta_no[$i],
                
              );
              $bijulijadandetail->create($jadan_detail_data);
             
          }

       return redirect('bijulijadansifaris');
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
