<?php

namespace App\Http\Controllers\englishformat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RelationVerification;
use App\RelationVerificationDetail;

class RelationVerificationController extends Controller
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
        $data = DB::select("SELECT * FROM relation_verifications where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM relation_verification_details where relation_id=".$data[0]->id." ");
      if($data!=null){
        return view('englishformat/print/relationverification_print',compact('detail'))->with('data',$data[0]); 
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
        return view('englishformat/relationverification_create');
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
        $relationVerification = new RelationVerification;
        $relationdetail = new RelationVerificationDetail;
          $relationVerification->ref_no = $request->ref_no;
          $relationVerification->issued_date = $request->issued_date;
          $relationVerification->applicant_title = $request->applicant_title;
          $relationVerification->applicant_name = $request->applicant_name;
          $relationVerification->previous_vdc_name = $request->previous_vdc_name;
          $relationVerification->previous_ward_no = $request->previous_ward_no;
          $relationVerification->previous_district = $request->previous_district;
          $relationVerification->user_id = $request->user_id;
          $relationVerification->nibedak_name = $request->nibedak_name;
          $relationVerification->nibedak_address = $request->nibedak_address;
          $relationVerification->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $relationVerification->nibedak_nid = $request->nibedak_nid;
          $relationVerification->save();
          $id = $relationVerification->id;


          $relative_title = $request->relative_title;
          $relative_name = $request->relative_name;
          $relative_relation = $request->relation;
        for($i=0; $i<count($relative_name); $i++){
              $relation_data = array('relation_id' => $id,
                'relative_title'=> $relative_title[$i],
                'relative_name' => $relative_name[$i],
                'relation' => $relative_relation[$i], 
              );
              $relationdetail->create($relation_data); 
          }

       return redirect('relationverification');
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
        //

        $data= RelationVerification::find($id);
        //dd($data->id);
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM relation_verification_details where relation_id=".$data->id." ");
        
        return view('englishformat.relationverification_edit',compact('detail','data'));
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
        $relationVerification= RelationVerification::find($id);
            $input = $request->except(['_method','_token','save_relation_verification_data','relative_title','relative_name','relation']);
        $relationdetail = new RelationVerificationDetail;
        RelationVerification::where('id', $id)
          ->update($input);
        RelationVerificationDetail::where('relation_id',$id)->delete();

          $relative_title = $request->relative_title;
        $relative_name = $request->relative_name;
        $relative_relation = $request->relation;
        for($i=0; $i<count($relative_name); $i++){
              $relation_data = array('relation_id' => $id,
                'relative_title'=> $relative_title[$i],
                'relative_name' => $relative_name[$i],
                'relation' => $relative_relation[$i], 
              );
              $relationdetail->create($relation_data);
             
          }

       return redirect('relationverification');
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

    public static function convertNos($nos){
    $n = '';
    switch($nos){
      case "०": $n = 0; break;
      case "१": $n = 1; break;
      case "२": $n= 2; break;
      case "३": $n = 3; break;
      case "४": $n = 4; break;
      case "५": $n = 5; break;
      case "६": $n = 6; break;
      case "७": $n = 7; break;
      case "८": $n = 8; break;
      case "९": $n = 9; break;
      case "0": $n = "०"; break;
      case "1": $n = "१"; break;
      case "2": $n = "२"; break;
      case "3": $n = "३"; break;
      case "4": $n = "४"; break;
      case "5": $n = "५"; break;
      case "6": $n = "६"; break;
      case "7": $n = "७"; break;
      case "8": $n = "८"; break;
      case "9": $n = "९"; break;
   }
   return $n;
}
}
