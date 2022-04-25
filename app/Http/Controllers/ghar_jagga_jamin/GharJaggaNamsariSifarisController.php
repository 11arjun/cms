<?php

namespace App\Http\Controllers\ghar_jagga_jamin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GharJaggaNamsariSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM  gharjagganamsarisifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('ghar_jagga_jamin/print/gharjagganamsarisifaris_print')->with('data',$data[0]); 
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
         return view('ghar_jagga_jamin/GharJaggaNamsariSifaris_create');
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
        // dd($request);

        $patra_sankhya=request()->patra_sankhya;
        $chalani_no=request()->chalani_no;
        $issued_date=request()->issued_date;

        $office_chairman=request()->office_chairman;
        $office_name=request()->office_name;
        $sabik_address=request()->sabik_address;
        $sabik_type=request()->sabik_type;
        $sabik_ward=request()->sabik_ward;
        $person_title=request()->person_title;
        $person_name=request()->person_name;
        $relation=request()->relation;
        $death_person_name=request()->death_person_name;
        $death_date=request()->death_date;
        $applicant_person_title=request()->applicant_person_title;
        $applicant_person_name=request()->applicant_person_name;
        $property_type=request()->property_type;

        //start
        $app_name=implode(',',request()->app_name);
        $app_relation=implode(',',request()->app_relation);
        $app_date=implode(',',request()->app_date);

        $hakdarko_name=implode(',',request()->hakdarko_name);
        $mritak_relation=implode(',',request()->mritak_relation);
        $father_husband_name=implode(',',request()->father_husband_name);
        $ciitizenship_no=implode(',',request()->ciitizenship_no);
        $kitta_no=implode(',',request()->kitta_no);

        $ward_no=implode(',',request()->ward_no);
        $area=implode(',',request()->area);
        $jagga_bibaran_kitta_no=implode(',',request()->jagga_bibaran_kitta_no);
        $remakrs=implode(',',request()->remakrs);

        //end


        $officer=request()->officer;
        $hakim_ko_name=request()->hakim_ko_name;
        $nibedak_name=request()->nibedak_name;
        $nibedak_address=request()->nibedak_address;
        $nibedak_citizenship_no=request()->nibedak_citizenship_no;
        $nibedak_nid=request()->nibedak_nid;

        $user_id=request()->user_id;

        $GharJaggaNamsariSifaris = new \App\GharJaggaNamsariSifaris;
        $GharJaggaNamsariSifaris->patra_sankhya=$patra_sankhya;
        $GharJaggaNamsariSifaris->chalani_no=$chalani_no;
        $GharJaggaNamsariSifaris->issued_date=$issued_date;

        $GharJaggaNamsariSifaris->office_chairman=$office_chairman;
        $GharJaggaNamsariSifaris->office_name=$office_name;

        $GharJaggaNamsariSifaris->sabik_address=$sabik_address;
        $GharJaggaNamsariSifaris->sabik_ward=$sabik_ward;
        $GharJaggaNamsariSifaris->sabik_type=$sabik_type;
        $GharJaggaNamsariSifaris->person_title=$person_title;
        $GharJaggaNamsariSifaris->person_name=$person_name;
        $GharJaggaNamsariSifaris->relation=$relation;
        $GharJaggaNamsariSifaris->death_person_name=$death_person_name;
        $GharJaggaNamsariSifaris->death_date=$death_date;
        $GharJaggaNamsariSifaris->applicant_person_title=$applicant_person_title;
        $GharJaggaNamsariSifaris->applicant_person_name=$applicant_person_name;
        $GharJaggaNamsariSifaris->property_type=$property_type;

        //start
        $GharJaggaNamsariSifaris->app_name=$app_name;
        $GharJaggaNamsariSifaris->app_relation=$app_relation;
        $GharJaggaNamsariSifaris->app_date=$app_date;
        // dd($GharJaggaNamsariSifaris->app_date);
        $GharJaggaNamsariSifaris->hakdarko_name=$hakdarko_name;
        $GharJaggaNamsariSifaris->mritak_relation=$mritak_relation;
        $GharJaggaNamsariSifaris->father_husband_name=$father_husband_name;
        $GharJaggaNamsariSifaris->ciitizenship_no=$ciitizenship_no;
        $GharJaggaNamsariSifaris->kitta_no=$kitta_no;

        $GharJaggaNamsariSifaris->ward_no=$ward_no;
        $GharJaggaNamsariSifaris->area=$area;
        $GharJaggaNamsariSifaris->jagga_bibaran_kitta_no=$jagga_bibaran_kitta_no;
        $GharJaggaNamsariSifaris->remakrs=$remakrs;

        //end


        $GharJaggaNamsariSifaris->officer=$officer;
        $GharJaggaNamsariSifaris->hakim_ko_name=$hakim_ko_name;
        $GharJaggaNamsariSifaris->nibedak_name=$nibedak_name;
        $GharJaggaNamsariSifaris->nibedak_address=$nibedak_address;
        $GharJaggaNamsariSifaris->nibedak_citizenship_no=$nibedak_citizenship_no;
        $GharJaggaNamsariSifaris->nibedak_nid=$nibedak_nid;
        $GharJaggaNamsariSifaris->user_id=$user_id;

        $GharJaggaNamsariSifaris->save();
return redirect('GharJaggaNamsariSifaris');
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
        
         $GharJaggaNamsariSifaris=\App\GharJaggaNamsariSifaris::find($id);

     return view('ghar_jagga_jamin.gharjagganamsarisifaris_edit')->with('data',$GharJaggaNamsariSifaris);
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

        $office_chairman=request()->office_chairman;
        $office_name=request()->office_name;

        $sabik_address=request()->sabik_address;
        $sabik_ward=request()->sabik_ward;
        $sabik_type=request()->sabik_type;
        $person_title=request()->person_title;
        $person_name=request()->person_name;
        $relation=request()->relation;
        $death_person_name=request()->death_person_name;
        $death_date=request()->death_date;
        $applicant_person_title=request()->applicant_person_title;
        $applicant_person_name=request()->applicant_person_name;
        $property_type=request()->property_type;

        //start
        $app_name=implode(',',request()->app_name);
        $app_relation=implode(',',request()->app_relation);
        $app_date=implode(',',request()->app_date);

        $hakdarko_name=implode(',',request()->hakdarko_name);
        $mritak_relation=implode(',',request()->mritak_relation);
        $father_husband_name=implode(',',request()->father_husband_name);
        $ciitizenship_no=implode(',',request()->ciitizenship_no);
        $kitta_no=implode(',',request()->kitta_no);

        $ward_no=implode(',',request()->ward_no);
        $area=implode(',',request()->area);
        $jagga_bibaran_kitta_no=implode(',',request()->jagga_bibaran_kitta_no);
        $remakrs=implode(',',request()->remakrs);

        //end

        $officer=request()->officer;
        $hakim_ko_name=request()->hakim_ko_name;
        $nibedak_name=request()->nibedak_name;
        $nibedak_address=request()->nibedak_address;
        $nibedak_citizenship_no=request()->nibedak_citizenship_no;
        $nibedak_nid=request()->nibedak_nid;
        $user_id=request()->user_id;
        $GharJaggaNamsariSifaris = new \App\GharJaggaNamsariSifaris;
        $GharJaggaNamsariSifaris->patra_sankhya=$patra_sankhya;
        $GharJaggaNamsariSifaris->chalani_no=$chalani_no;
        $GharJaggaNamsariSifaris->issued_date=$issued_date;
        $GharJaggaNamsariSifaris->office_chairman=$office_chairman;
        $GharJaggaNamsariSifaris->office_name=$office_name;
        $GharJaggaNamsariSifaris->sabik_address=$sabik_address;
        $GharJaggaNamsariSifaris->sabik_ward=$sabik_ward;
        $GharJaggaNamsariSifaris->sabik_type=$sabik_type;
        $GharJaggaNamsariSifaris->person_title=$person_title;
        $GharJaggaNamsariSifaris->person_name=$person_name;
        $GharJaggaNamsariSifaris->relation=$relation;
        $GharJaggaNamsariSifaris->death_person_name=$death_person_name;
        $GharJaggaNamsariSifaris->death_date=$death_date;
        $GharJaggaNamsariSifaris->applicant_person_title=$applicant_person_title;
        $GharJaggaNamsariSifaris->applicant_person_name=$applicant_person_name;
        $GharJaggaNamsariSifaris->property_type=$property_type;

        //start
        $GharJaggaNamsariSifaris->app_name=$app_name;
        $GharJaggaNamsariSifaris->app_relation=$app_relation;
        $GharJaggaNamsariSifaris->app_date=$app_date;

        $GharJaggaNamsariSifaris->hakdarko_name=$hakdarko_name;
        $GharJaggaNamsariSifaris->mritak_relation=$mritak_relation;
        $GharJaggaNamsariSifaris->father_husband_name=$father_husband_name;
        $GharJaggaNamsariSifaris->ciitizenship_no=$ciitizenship_no;
        $GharJaggaNamsariSifaris->kitta_no=$kitta_no;

        $GharJaggaNamsariSifaris->ward_no=$ward_no;
        $GharJaggaNamsariSifaris->area=$area;
        $GharJaggaNamsariSifaris->jagga_bibaran_kitta_no=$jagga_bibaran_kitta_no;
        $GharJaggaNamsariSifaris->remakrs=$remakrs;

        //end


        $GharJaggaNamsariSifaris->officer=$officer;
        $GharJaggaNamsariSifaris->hakim_ko_name=$hakim_ko_name;
        $GharJaggaNamsariSifaris->nibedak_name=$nibedak_name;
        $GharJaggaNamsariSifaris->nibedak_address=$nibedak_address;
        $GharJaggaNamsariSifaris->nibedak_citizenship_no=$nibedak_citizenship_no;
        $GharJaggaNamsariSifaris->nibedak_nid=$nibedak_nid;

        $GharJaggaNamsariSifaris->user_id=$user_id;

        $GharJaggaNamsariSifaris->save();
return redirect('GharJaggaNamsariSifaris');
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
