<?php
namespace App\Http\Controllers\ghar_jagga_jamin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CharKillaPramanit;
use App\CharKillaPramanitDetail;

class CharKillaPramanitController extends Controller
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
        $data = DB::select("SELECT * FROM char_killa_pramanit where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM char_killa_pramanit_detail where char_killa_id=".$data[0]->id." ");
      if($data!=null){
        return view('ghar_jagga_jamin/print/CharKillaPramanit_print',compact('detail'))->with('data',$data[0]); 
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
      
        return view('ghar_jagga_jamin/CharKillaPramanit_create');

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
        $charkilla = new CharKillaPramanit;
        $charkilladetail = new CharKillaPramanitDetail;
          $charkilla->patra_sankya = $request->patra_sankya;
          $charkilla->chalani_no = $request->chalani_no;
          $charkilla->issued_date = $request->issued_date;
          $charkilla->sabik_address = $request->sabik_address;
          $charkilla->person_title = $request->person_title;
          $charkilla->person_name = $request->person_name;
          $charkilla->user_id = $request->user_id;
          $charkilla->nibedak_name = $request->nibedak_name;
          $charkilla->nibedak_address = $request->nibedak_address;
          $charkilla->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $charkilla->nibedak_nid = $request->nibedak_nid;
          $charkilla->save();
          $id = $charkilla->id;

          $ward_no = $request->ward_no;
          $seat_kitta_area = $request->seat_kitta_area;
          $batto_abastha = $request->batto_abastha;
          $east = $request->east;
          $west = $request->west;
          $north = $request->north;
          $south = $request->south;
          $remark = $request->remark;
      
          $char_killa_id = $request->char_killa_id;
        for($i=0; $i<count($seat_kitta_area); $i++){
              $charkilla_detail_data = array('char_killa_id' => $id,
                 'ward_no' => $ward_no[$i],
                'seat_kitta_area' => $seat_kitta_area[$i],
                'east' => $east[$i],
                'batto_abastha' => $batto_abastha[$i],
                'west' => $west[$i],
                'north' => $north[$i],
                'south' => $south[$i],
                'remark' => $remark[$i],
                
              );
              $charkilladetail->create($charkilla_detail_data); 
          }

       return redirect('charkillapramanit');
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
        $data= CharKillaPramanit::find($id);
        
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM char_killa_pramanit_detail where char_killa_id=".$data->id." ");
        
        return view('ghar_jagga_jamin.CharKillaPramanit_edit',compact('detail','data'));
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
        $charkilla= CharKillaPramanit::find($id);
            $input = $request->except(['_method','_token','char_killa_id','south','seat_kitta_area','batto_abastha','east','west','north','remark','ward_no','update_char_killa_pramanit_data']);
        $charkilladetail = new CharKillaPramanitDetail;
        CharKillaPramanit::where('id', $id)
          ->update($input);
        CharKillaPramanitDetail::where('char_killa_id',$id)->delete();
          $ward_no = $request->ward_no;
         
          $seat_kitta_area = $request->seat_kitta_area;
          $east = $request->east;
          $north = $request->north;
          $west = $request->west;
          $south = $request->south;
          $batto_abastha = $request->batto_abastha;
          $remark = $request->remark;
          $char_killa_id = $request->char_killa_id;
        for($i=0; $i<count($ward_no); $i++){
              $charkilla_detail_data = array('char_killa_id' => $id,
              'ward_no'=> $ward_no[$i],
              'south'=> $south[$i],
              'seat_kitta_area'=> $seat_kitta_area[$i],
              'east'=> $east[$i],
              'north'=> $north[$i],
              'west'=> $west[$i],
              'remark'=> $remark[$i],
              'batto_abastha'=> $batto_abastha[$i],
              
              );
              $charkilladetail->create($charkilla_detail_data);
             
          }

       return redirect('charkillapramanit');
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
