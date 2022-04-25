<?php

namespace App\Http\Controllers\ghar_jagga_jamin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use GharJaggaNamsariKitani;

class GharJaggaNamsariKitaniController extends Controller
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
        $data = DB::select("SELECT * FROM  gharjagganamsarikitani  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('ghar_jagga_jamin/print/gharjagganamsarikitani_print')->with('data',$data[0]); 
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
         return view('ghar_jagga_jamin/GharJaggaNamsariKitani_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

$patra_sankhya=request()->patra_sankhya;
$chalani_no=request()->chalani_no;
$issued_date=request()->issued_date;
$letter_subject=request()->letter_subject;
$office_chairman=request()->office_chairman;
$office_name=request()->office_name;
$local_state=request()->local_state;
$ward=request()->ward;
$sabik_address=request()->sabik_address;
$sabik_ward=request()->sabik_ward;
$g_name=request()->g_name;
$f_name=request()->f_name;
$m_name=request()->m_name;
$person_name=request()->person_name;
$relation=request()->relation;
$death_person_name=request()->death_person_name;
$death_date=request()->death_date;
$land_local_state=request()->land_local_state;
$land_ward=request()->land_ward;
$land_sabik_address=request()->land_sabik_address;
$land_sabik_ward=request()->land_sabik_ward;
$land_kitta_no=request()->land_kitta_no;
$jagga_area=request()->jagga_area;
$darta_type=request()->darta_type;
//start
$app_name=implode(',',request()->app_name);
$app_relation=implode(',',request()->app_relation);
$app_date=implode(',',request()->app_date);

$hakdarko_name=implode(',',request()->hakdarko_name);
$mritak_relation=implode(',',request()->mritak_relation);
$father_husband_name=implode(',',request()->father_husband_name);
$ciitizenship_no=implode(',',request()->ciitizenship_no);
$kitta_no=implode(',',request()->kitta_no);

$namsarihakdarko_name=implode(',',request()->namsarihakdarko_name);
$namsarimritak_relation=implode(',',request()->namsarimritak_relation);
$namsarifather_husband_name=implode(',',request()->namsarifather_husband_name);
$namsariciitizenship_no=implode(',',request()->namsariciitizenship_no);
$namsarikitta_no=implode(',',request()->namsarikitta_no);
//end

$sarjaminlocal_state=request()->sarjaminlocal_state;
$sarjaminward=request()->sarjaminward;
$sarjaminbarsa=request()->sarjaminbarsa;
$sarjaminname=request()->sarjaminname;
$sarjaminno=request()->sarjaminno;
$hakim_ko_name=request()->hakim_ko_name;
$nibedak_name=request()->nibedak_name;
$nibedak_address=request()->nibedak_address;
$nibedak_citizenship_no=request()->nibedak_citizenship_no;
$nibedak_nid=request()->nibedak_nid;

$sabik_type=request()->sabik_type;
$g_title=request()->g_title;
$c_title=request()->c_title;
$person_title=request()->person_title;
$nata_title=request()->nata_title;
$land_sabik_type=request()->land_sabik_type;
$prop_type=request()->prop_type;
$hak_type=request()->hak_type;
$officer=request()->officer;
$user_id=request()->user_id;
$behora=request()->behora;


  $GharJaggaNamsariKitani = new \App\GharJaggaNamsariKitani;
       
$GharJaggaNamsariKitani->patra_sankhya=$patra_sankhya;
$GharJaggaNamsariKitani->chalani_no=$chalani_no;
$GharJaggaNamsariKitani->issued_date=$issued_date;
$GharJaggaNamsariKitani->letter_subject=$letter_subject;
$GharJaggaNamsariKitani->office_chairman=$office_chairman;
$GharJaggaNamsariKitani->office_name=$office_name;
$GharJaggaNamsariKitani->local_state=$local_state;
$GharJaggaNamsariKitani->ward=$ward;
$GharJaggaNamsariKitani->sabik_address=$sabik_address;
$GharJaggaNamsariKitani->sabik_ward=$sabik_ward;
$GharJaggaNamsariKitani->g_name=$g_name;
$GharJaggaNamsariKitani->f_name=$f_name;
$GharJaggaNamsariKitani->m_name=$m_name;
$GharJaggaNamsariKitani->person_name=$person_name;
$GharJaggaNamsariKitani->relation=$relation;
$GharJaggaNamsariKitani->death_person_name=$death_person_name;
$GharJaggaNamsariKitani->death_date=$death_date;
$GharJaggaNamsariKitani->land_local_state=$land_local_state;
$GharJaggaNamsariKitani->land_ward=$land_ward;
$GharJaggaNamsariKitani->land_sabik_address=$land_sabik_address;
$GharJaggaNamsariKitani->land_sabik_ward=$land_sabik_ward;
$GharJaggaNamsariKitani->land_kitta_no=$land_kitta_no;
$GharJaggaNamsariKitani->jagga_area=$jagga_area;
$GharJaggaNamsariKitani->darta_type=$darta_type;
//start
$GharJaggaNamsariKitani->app_name=$app_name;
$GharJaggaNamsariKitani->app_relation=$app_relation;
$GharJaggaNamsariKitani->app_date=$app_date;

$GharJaggaNamsariKitani->hakdarko_name=$hakdarko_name;
$GharJaggaNamsariKitani->mritak_relation=$mritak_relation;
$GharJaggaNamsariKitani->father_husband_name=$father_husband_name;
$GharJaggaNamsariKitani->ciitizenship_no=$ciitizenship_no;
$GharJaggaNamsariKitani->kitta_no=$kitta_no;

$GharJaggaNamsariKitani->namsarihakdarko_name=$namsarihakdarko_name;
$GharJaggaNamsariKitani->namsarimritak_relation=$namsarimritak_relation;
$GharJaggaNamsariKitani->namsarifather_husband_name=$namsarifather_husband_name;
$GharJaggaNamsariKitani->namsariciitizenship_no=$namsariciitizenship_no;
$GharJaggaNamsariKitani->namsarikitta_no=$namsarikitta_no;
//end

$GharJaggaNamsariKitani->sarjaminlocal_state=$sarjaminlocal_state;
$GharJaggaNamsariKitani->sarjaminward=$sarjaminward;
$GharJaggaNamsariKitani->sarjaminbarsa=$sarjaminbarsa;
$GharJaggaNamsariKitani->sarjaminname=$sarjaminname;
$GharJaggaNamsariKitani->sarjaminno=$sarjaminno;
$GharJaggaNamsariKitani->hakim_ko_name=$hakim_ko_name;
$GharJaggaNamsariKitani->nibedak_name=$nibedak_name;
$GharJaggaNamsariKitani->nibedak_address=$nibedak_address;
$GharJaggaNamsariKitani->nibedak_citizenship_no=$nibedak_citizenship_no;
$GharJaggaNamsariKitani->nibedak_nid=$nibedak_nid;

$GharJaggaNamsariKitani->sabik_type=$sabik_type;
$GharJaggaNamsariKitani->g_title=$g_title;
$GharJaggaNamsariKitani->c_title=$c_title;
$GharJaggaNamsariKitani->person_title=$person_title;
$GharJaggaNamsariKitani->nata_title=$nata_title;
$GharJaggaNamsariKitani->land_sabik_type=$land_sabik_type;
$GharJaggaNamsariKitani->prop_type=$prop_type;
$GharJaggaNamsariKitani->hak_type=$hak_type;
$GharJaggaNamsariKitani->officer=$officer;
$GharJaggaNamsariKitani->user_id=$user_id;
$GharJaggaNamsariKitani->behora=$behora;
$GharJaggaNamsariKitani->save();
return redirect('GharJaggaNamsariKitaniController');
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

         $GharJaggaNamsariKitani=\App\GharJaggaNamsariKitani::find($id);

     return view('ghar_jagga_jamin.GharJaggaNamsariKitani_edit')->with('data',$GharJaggaNamsariKitani);
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
        //
        $patra_sankhya=request()->patra_sankhya;
$chalani_no=request()->chalani_no;
$issued_date=request()->issued_date;
$letter_subject=request()->letter_subject;
$office_chairman=request()->office_chairman;
$office_name=request()->office_name;
$local_state=request()->local_state;
$ward=request()->ward;
$sabik_address=request()->sabik_address;
$sabik_ward=request()->sabik_ward;
$g_name=request()->g_name;
$f_name=request()->f_name;
$m_name=request()->m_name;
$person_name=request()->person_name;
$relation=request()->relation;
$death_person_name=request()->death_person_name;
$death_date=request()->death_date;
$land_local_state=request()->land_local_state;
$land_ward=request()->land_ward;
$land_sabik_address=request()->land_sabik_address;
$land_sabik_ward=request()->land_sabik_ward;
$land_kitta_no=request()->land_kitta_no;
$jagga_area=request()->jagga_area;
$darta_type=request()->darta_type;
//start
$app_name=implode(',',request()->app_name);
$app_relation=implode(',',request()->app_relation);
$app_date=implode(',',request()->app_date);

$hakdarko_name=implode(',',request()->hakdarko_name);
$mritak_relation=implode(',',request()->mritak_relation);
$father_husband_name=implode(',',request()->father_husband_name);
$ciitizenship_no=implode(',',request()->ciitizenship_no);
$kitta_no=implode(',',request()->kitta_no);

$namsarihakdarko_name=implode(',',request()->namsarihakdarko_name);
$namsarimritak_relation=implode(',',request()->namsarimritak_relation);
$namsarifather_husband_name=implode(',',request()->namsarifather_husband_name);
$namsariciitizenship_no=implode(',',request()->namsariciitizenship_no);
$namsarikitta_no=implode(',',request()->namsarikitta_no);
//end

$sarjaminlocal_state=request()->sarjaminlocal_state;
$sarjaminward=request()->sarjaminward;
$sarjaminbarsa=request()->sarjaminbarsa;
$sarjaminname=request()->sarjaminname;
$sarjaminno=request()->sarjaminno;
$hakim_ko_name=request()->hakim_ko_name;
$nibedak_name=request()->nibedak_name;
$nibedak_address=request()->nibedak_address;
$nibedak_citizenship_no=request()->nibedak_citizenship_no;
$nibedak_nid=request()->nibedak_nid;

$sabik_type=request()->sabik_type;
$g_title=request()->g_title;
$c_title=request()->c_title;
$person_title=request()->person_title;
$nata_title=request()->nata_title;
$land_sabik_type=request()->land_sabik_type;
$prop_type=request()->prop_type;
$hak_type=request()->hak_type;
$officer=request()->officer;
$user_id=request()->user_id;
$behora=request()->behora;


$GharJaggaNamsariKitani=\App\GharJaggaNamsariKitani::find($id);
$GharJaggaNamsariKitani->patra_sankhya=$patra_sankhya;
$GharJaggaNamsariKitani->chalani_no=$chalani_no;
$GharJaggaNamsariKitani->issued_date=$issued_date;
$GharJaggaNamsariKitani->letter_subject=$letter_subject;
$GharJaggaNamsariKitani->office_chairman=$office_chairman;
$GharJaggaNamsariKitani->office_name=$office_name;
$GharJaggaNamsariKitani->local_state=$local_state;
$GharJaggaNamsariKitani->ward=$ward;
$GharJaggaNamsariKitani->sabik_address=$sabik_address;
$GharJaggaNamsariKitani->sabik_ward=$sabik_ward;
$GharJaggaNamsariKitani->g_name=$g_name;
$GharJaggaNamsariKitani->f_name=$f_name;
$GharJaggaNamsariKitani->m_name=$m_name;
$GharJaggaNamsariKitani->person_name=$person_name;
$GharJaggaNamsariKitani->relation=$relation;
$GharJaggaNamsariKitani->death_person_name=$death_person_name;
$GharJaggaNamsariKitani->death_date=$death_date;
$GharJaggaNamsariKitani->land_local_state=$land_local_state;
$GharJaggaNamsariKitani->land_ward=$land_ward;
$GharJaggaNamsariKitani->land_sabik_address=$land_sabik_address;
$GharJaggaNamsariKitani->land_sabik_ward=$land_sabik_ward;
$GharJaggaNamsariKitani->land_kitta_no=$land_kitta_no;
$GharJaggaNamsariKitani->jagga_area=$jagga_area;
$GharJaggaNamsariKitani->darta_type=$darta_type;
//start
$GharJaggaNamsariKitani->app_name=$app_name;
$GharJaggaNamsariKitani->app_relation=$app_relation;
$GharJaggaNamsariKitani->app_date=$app_date;

$GharJaggaNamsariKitani->hakdarko_name=$hakdarko_name;
$GharJaggaNamsariKitani->mritak_relation=$mritak_relation;
$GharJaggaNamsariKitani->father_husband_name=$father_husband_name;
$GharJaggaNamsariKitani->ciitizenship_no=$ciitizenship_no;
$GharJaggaNamsariKitani->kitta_no=$kitta_no;

$GharJaggaNamsariKitani->namsarihakdarko_name=$namsarihakdarko_name;
$GharJaggaNamsariKitani->namsarimritak_relation=$namsarimritak_relation;
$GharJaggaNamsariKitani->namsarifather_husband_name=$namsarifather_husband_name;
$GharJaggaNamsariKitani->namsariciitizenship_no=$namsariciitizenship_no;
$GharJaggaNamsariKitani->namsarikitta_no=$namsarikitta_no;
//end

$GharJaggaNamsariKitani->sarjaminlocal_state=$sarjaminlocal_state;
$GharJaggaNamsariKitani->sarjaminward=$sarjaminward;
$GharJaggaNamsariKitani->sarjaminbarsa=$sarjaminbarsa;
$GharJaggaNamsariKitani->sarjaminname=$sarjaminname;
$GharJaggaNamsariKitani->sarjaminno=$sarjaminno;
$GharJaggaNamsariKitani->hakim_ko_name=$hakim_ko_name;
$GharJaggaNamsariKitani->nibedak_name=$nibedak_name;
$GharJaggaNamsariKitani->nibedak_address=$nibedak_address;
$GharJaggaNamsariKitani->nibedak_citizenship_no=$nibedak_citizenship_no;
$GharJaggaNamsariKitani->nibedak_nid=$nibedak_nid;

$GharJaggaNamsariKitani->sabik_type=$sabik_type;
$GharJaggaNamsariKitani->g_title=$g_title;
$GharJaggaNamsariKitani->c_title=$c_title;
$GharJaggaNamsariKitani->person_title=$person_title;
$GharJaggaNamsariKitani->nata_title=$nata_title;
$GharJaggaNamsariKitani->land_sabik_type=$land_sabik_type;
$GharJaggaNamsariKitani->prop_type=$prop_type;
$GharJaggaNamsariKitani->hak_type=$hak_type;
$GharJaggaNamsariKitani->officer=$officer;
$GharJaggaNamsariKitani->user_id=$user_id;
$GharJaggaNamsariKitani->behora=$behora;
$GharJaggaNamsariKitani->save();
return redirect('GharJaggaNamsariKitaniController');

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
