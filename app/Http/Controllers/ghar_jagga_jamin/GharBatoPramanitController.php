<?php
namespace App\Http\Controllers\ghar_jagga_jamin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GharBatoPramanit;
use App\GharBatoPramanitDetail;

class GharBatoPramanitController extends Controller
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
        $data = DB::select("SELECT * FROM ghar_bato_pramanit where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM ghar_bato_pramanit_detail where ghar_bato_id=".$data[0]->id." ");
      if($data!=null){
        return view('ghar_jagga_jamin/print/GharBatoPramanit_print',compact('detail'))->with('data',$data[0]);
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

        return view('ghar_jagga_jamin/GharBatoPramanit_create');

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
        $gharbato = new GharBatoPramanit;
        $gharbatodetail = new GharBatoPramanitDetail;
          $gharbato->patra_sankya = $request->patra_sankya;
          $gharbato->chalani_no = $request->chalani_no;
          $gharbato->issued_date = $request->issued_date;
          $gharbato->office_chairman = $request->office_chairman;
          $gharbato->office_name = $request->office_name;
          $gharbato->sabik_address = $request->sabik_address;
          $gharbato->person_title = $request->person_title;
          $gharbato->person_name = $request->person_name;
          $gharbato->user_id = $request->user_id;
          $gharbato->nibedak_name = $request->nibedak_name;
          $gharbato->nibedak_address = $request->nibedak_address;
          $gharbato->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $gharbato->nibedak_nid = $request->nibedak_nid;
          $gharbato->save();
          $id = $gharbato->id;

          $ward_no = $request->ward_no;
          $seat_no = $request->seat_no;
          $kitta_no = $request->kitta_no;
          $area = $request->area;
          $batto_name = $request->batto_name;
          $ghar_abastha = $request->ghar_abastha;
          $bato_type = $request->bato_type;
          $remark = $request->remark;

          $ghar_bato_id = $request->ghar_bato_id;
        for($i=0; $i<count($kitta_no); $i++){
              $gharbato_detail_data = array('ghar_bato_id' => $id,
                 'ward_no' => $ward_no[$i],
                'seat_no' => $seat_no[$i],
                'area' => $area[$i],
                'kitta_no' => $kitta_no[$i],
                'batto_name' => $batto_name[$i],
                'ghar_abastha' => $ghar_abastha[$i],
                'bato_type' => $bato_type[$i],
                'remark' => $remark[$i],

              );
              $gharbatodetail->create($gharbato_detail_data);
          }

       return redirect('gharbatopramanit');
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
        $data= GharBatoPramanit::find($id);

        //$detail = RelationVerificationDetail::find($data->id);
        $detail = DB::select("SELECT * FROM ghar_bato_pramanit_detail where ghar_bato_id=".$data->id." ");

        return view('ghar_jagga_jamin.GharBatoPramanit_edit',compact('detail','data'));
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
        $gharbato= GharBatoPramanit::find($id);
            $input = $request->except(['_method','_token','ghar_bato_id','kitta_no','seat_no','area','batto_name','ghar_abastha','bato_type','remark','ward_no','update_ghar_bato_pramanit_data']);
        $gharbatodetail = new GharBatoPramanitDetail;
        GharBatoPramanit::where('id', $id)
          ->update($input);
        GharBatoPramanitDetail::where('ghar_bato_id',$id)->delete();
          $ward_no = $request->ward_no;
          $kitta_no = $request->kitta_no;
          $seat_no = $request->seat_no;
          $batto_name = $request->batto_name;
          $bato_type = $request->bato_type;
          $ghar_abastha = $request->ghar_abastha;
          $remark = $request->remark;
          $ghar_bato_id = $request->ghar_bato_id;
        for($i=0; $i<count($kitta_no); $i++){
              $gharbato_detail_data = array('ghar_bato_id' => $id,
              'ward_no'=> $ward_no[$i],
              'kitta_no'=> $kitta_no[$i],
              'seat_no'=> $seat_no[$i],
              'batto_name'=> $batto_name[$i],
              'bato_type'=> $bato_type[$i],
              'ghar_abastha'=> $ghar_abastha[$i],
              'remark'=> $remark[$i],
               'area'=> $area[$i],

              );
              $gharbatodetail->create($gharbato_detail_data);

          }

       return redirect('gharbatopramanit');
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
