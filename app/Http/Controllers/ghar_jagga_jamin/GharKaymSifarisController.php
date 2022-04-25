<?php

namespace App\Http\Controllers\ghar_jagga_jamin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Gharkayamsifaris;

class GharKaymSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM gharkayamsifaris  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('ghar_jagga_jamin/print/gharkayamsifaris_print')->with('data',$data[0]); 
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
         return view('ghar_jagga_jamin/GharKaymSifaris_create');
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
$person_name=request()->person_name;

//start
$sabik_vdc=implode(',',request()->sabik_vdc);

$sabik_ward_no=implode(',',request()->sabik_ward_no);

$nagarpalika_name=implode(',',request()->nagarpalika_name);
$ward_no=implode(',',request()->ward_no);
$kitta_no=implode(',',request()->kitta_no);
$area=implode(',',request()->area);
$ghar_nirman_year=implode(',',request()->ghar_nirman_year);
//end
$hakim_ko_name=request()->hakim_ko_name;
$nibedak_name=request()->nibedak_name;
$nibedak_address=request()->nibedak_address;
$nibedak_citizenship_no=request()->nibedak_citizenship_no;
$nibedak_nid=request()->nibedak_nid;

$sabik_type=request()->sabik_type;
$person_title=request()->person_title;
$ghar_nirman_option=request()->ghar_nirman_option;
$sabik=request()->sabik;
$officer=request()->officer;
$user_id=request()->user_id;

  $Gharkayamsifaris = new \App\Gharkayamsifaris;

  $Gharkayamsifaris->patra_sankhya=$patra_sankhya;
$Gharkayamsifaris->chalani_no=$chalani_no;
$Gharkayamsifaris->issued_date=$issued_date;
$Gharkayamsifaris->letter_subject=$letter_subject;
$Gharkayamsifaris->office_chairman=$office_chairman;
$Gharkayamsifaris->office_name=$office_name;
$Gharkayamsifaris->local_state=$local_state;
$Gharkayamsifaris->ward=$ward;
$Gharkayamsifaris->sabik_address=$sabik_address;
$Gharkayamsifaris->sabik_ward=$sabik_ward;
$Gharkayamsifaris->person_name=$person_name;

//start
$Gharkayamsifaris->sabik_vdc=$sabik_vdc;
$Gharkayamsifaris->sabik_ward_no=$sabik_ward_no;
$Gharkayamsifaris->nagarpalika_name=$nagarpalika_name;
$Gharkayamsifaris->ward_no=$ward_no;
$Gharkayamsifaris->kitta_no=$kitta_no;
$Gharkayamsifaris->area=$area;
$Gharkayamsifaris->ghar_nirman_year=$ghar_nirman_year;
//end
$Gharkayamsifaris->hakim_ko_name=$hakim_ko_name;
$Gharkayamsifaris->nibedak_name=$nibedak_name;
$Gharkayamsifaris->nibedak_address=$nibedak_address;
$Gharkayamsifaris->nibedak_citizenship_no=$nibedak_citizenship_no;
$Gharkayamsifaris->nibedak_nid=$nibedak_nid;

$Gharkayamsifaris->sabik_type=$sabik_type;
$Gharkayamsifaris->person_title=$person_title;
$Gharkayamsifaris->ghar_nirman_option=$ghar_nirman_option;
$Gharkayamsifaris->sabik=$sabik;
$Gharkayamsifaris->officer=$officer;
$Gharkayamsifaris->user_id=$user_id;
$Gharkayamsifaris->save();
return redirect('GharKaymSifaris');

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
            $Sarjimin=\App\Gharkayamsifaris::find($id);

     return view('ghar_jagga_jamin.gharkayamsifaris_edit')->with('data',$Sarjimin);
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
