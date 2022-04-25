<?php

namespace App\Http\Controllers\samajik_pariwarik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TinpustePramanit;
use App\TinpusteDetailBibaran;
use App\TinpusteJaggaBibaran;

class TinpustePramanitController extends Controller
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
        $data = DB::select("SELECT * FROM tinpuste_pramanits where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM tinpuste_jagga_bibarans where tinpuste_id=".$data[0]->id." ");

        $bibaran = DB::select("SELECT * FROM tinpuste_detail_bibarans where tinpustedetail_id=".$data[0]->id." ");
      if($data!=null){
        return view('samajikpariwarik/print/tinpustepramanit_print',compact('detail','bibaran'))->with('data',$data[0]); 
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
        return view('samajikpariwarik/tinpustepramanit_create');
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
        $tinpustepramanit = new TinpustePramanit;
        $relationdetail = new TinpusteJaggaBibaran;
        $tinpustedetail = new TinpusteDetailBibaran;
          $tinpustepramanit->patra_sankya = $request->patra_sankya;
          $tinpustepramanit->chalani_no = $request->chalani_no;
          $tinpustepramanit->issued_date = $request->issued_date;
          $tinpustepramanit->person_title = $request->person_title;
          $tinpustepramanit->person_name = $request->person_name;
          $tinpustepramanit->sabik_address = $request->sabik_address;
          $tinpustepramanit->nibedak_name = $request->nibedak_name;
          $tinpustepramanit->nibedak_address = $request->nibedak_address;
          $tinpustepramanit->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $tinpustepramanit->nibedak_nid = $request->nibedak_nid;
          $tinpustepramanit->user_id = $request->user_id;
          $tinpustepramanit->save();
          $id = $tinpustepramanit->id;


          $tinpuste_id = $request->tinpuste_id;
          $seat_no = $request->seat_no;
          $kitta_no = $request->kitta_no;
          $area = $request->area;

          $name = $request->name;
          $relation = $request->relation;
          $citizenship_no = $request->citizenship_no;
          $citizenship_issue = $request->citizenship_issued_date;
          $citizenship_district = $request->citizenship_issued_district;

        for($i=0; $i<count($seat_no); $i++){
            $relation_data = array('tinpuste_id' => $id,
            'seat_no' => $seat_no[$i],
            'kitta_no' => $kitta_no[$i],
            'area' => $area[$i],
        );
        $relationdetail->create($relation_data);
    }
          for($r=0; $r<count($relation); $r++){
                $detail_data = array('tinpustedetail_id' => $id,
                'name' => $name[$r],
                'relation' => $relation[$r],
                'citizenship_no' => $citizenship_no[$r],
                'citizenship_issued_date' => $citizenship_issue[$r],
                'citizenship_issued_district' => $citizenship_district[$r],
              );
            
              $tinpustedetail->create($detail_data);

          }
 
       return redirect('tinpustepramanit');
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
        $data= TinpustePramanit::find($id);
        
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM tinpuste_jagga_bibarans where tinpuste_id=".$data->id." ");

        $bibaran = DB::select("SELECT * FROM tinpuste_detail_bibarans where tinpustedetail_id=".$data->id." ");
        
        return view('samajikpariwarik.tinpustepramanit_edit',compact('detail','data','bibaran'));
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
        $tinpustepramanit= TinpustePramanit::find($id);
            $input = $request->except(['_method','_token','save_tinpuste_pramanit_data','tinpuste_id','seat_no','kitta_no','area','tinpustedetail_id','name','relation','citizenship_no','citizenship_issued_date','citizenship_issued_district']);
        $relationdetail = new TinpusteJaggaBibaran;
        $tinpustedetail = new TinpusteDetailBibaran;
        TinpustePramanit::where('id', $id)
          ->update($input);
        TinpusteJaggaBibaran::where('tinpuste_id',$id)->delete();
        TinpusteDetailBibaran::where('tinpustedetail_id',$id)->delete();

          $tinpuste_id = $request->tinpuste_id;
          $seat_no = $request->seat_no;
          $kitta_no = $request->kitta_no;
          $area = $request->area;

          $name = $request->name;
          $relation = $request->relation;
          $citizenship_no = $request->citizenship_no;
          $citizenship_issue = $request->citizenship_issued_date;
          $citizenship_district = $request->citizenship_issued_district;


        for($i=0; $i<count($seat_no); $i++){
              $relation_data = array('tinpuste_id' => $id,
                'seat_no' => $seat_no[$i],
                'kitta_no' => $kitta_no[$i],
                'area' => $area[$i],
              );
              $relationdetail->create($relation_data);
            }
           
        for($r=0; $r<count($relation); $r++){
              $detail_data = array('tinpustedetail_id' => $id,
                'name' => $name[$r],
                'relation' => $relation[$r],
                'citizenship_no' => $citizenship_no[$r],
                'citizenship_issued_date' => $citizenship_issue[$r],
                'citizenship_issued_district' => $citizenship_district[$r],
              );
              
              $tinpustedetail->create($detail_data);
          }
         
       return redirect('tinpustepramanit');
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
