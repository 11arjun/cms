<?php

namespace App\Http\Controllers\ghar_jagga_jamin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Shresta;

class ShrestaController extends Controller
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
        $data = DB::select("SELECT * FROM shresta  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('ghar_jagga_jamin/print/shresta_print')->with('data',$data[0]); 
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
         return view('ghar_jagga_jamin/shresta_create');
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
             $patra_sankya=request()->patra_sankya;
$chalani_no=request()->chalani_no;
$issued_date=request()->issued_date;
$letter_subject=request()->letter_subject;
$office_name=request()->office_name;
$office_address=request()->office_address;
$local_state=request()->local_state;
$ward=request()->ward;
$sabik_address=request()->sabik_address;
$sabik_ward=request()->sabik_ward;
$grand_father=request()->grand_father;
$father=request()->father;
$child_name=request()->child_name;
$prop_type=request()->prop_type;
// start here
$sabik_vdc_name=implode(',',request()->sabik_vdc_name);
$sabik_ward_no=implode(',',request()->sabik_ward_no);
$nagarpalika_name=implode(',',request()->nagarpalika_name);
$ward_no=implode(',',request()->ward_no);
$kitta_no=implode(',',request()->kitta_no);
$area=implode(',',request()->area);
// end
$hakim_ko_name=request()->hakim_ko_name;
$nibedak_name=request()->nibedak_name;
$nibedak_address=request()->nibedak_address;
$nibedak_citizenship_no=request()->nibedak_citizenship_no;
$nibedak_nid=request()->nibedak_nid;
$jagga_dhani=request()->jagga_dhani;
$sabik_type=request()->sabik_type;
$grand_child=request()->grand_child;
$child=request()->child;
$sabik=request()->sabik;
$officer=request()->officer;
$user_id=request()->user_id;

  $Shresta = new \App\Shresta;
       $Shresta->patra_sankya=$patra_sankya;
$Shresta->chalani_no=$chalani_no;
$Shresta->issued_date=$issued_date;
$Shresta->letter_subject=$letter_subject;
$Shresta->office_name=$office_name;
$Shresta->office_address=$office_address;
$Shresta->local_state=$local_state;
$Shresta->ward=$ward;
$Shresta->sabik_address=$sabik_address;
$Shresta->sabik_ward=$sabik_ward;
$Shresta->grand_father=$grand_father;
$Shresta->father=$father;
$Shresta->child_name=$child_name;
$Shresta->prop_type=$prop_type;
// start here
$Shresta->sabik_vdc_name=$sabik_vdc_name;
$Shresta->sabik_ward_no=$sabik_ward_no;
$Shresta->nagarpalika_name=$nagarpalika_name;
$Shresta->ward_no=$ward_no;
$Shresta->kitta_no=$kitta_no;
$Shresta->area=$area;
// end
$Shresta->hakim_ko_name=$hakim_ko_name;
$Shresta->nibedak_name=$nibedak_name;
$Shresta->nibedak_address=$nibedak_address;
$Shresta->nibedak_citizenship_no=$nibedak_citizenship_no;
$Shresta->nibedak_nid=$nibedak_nid;

$Shresta->jagga_dhani=$jagga_dhani;
$Shresta->sabik_type=$sabik_type;
$Shresta->grand_child=$grand_child;
$Shresta->child=$child;
$Shresta->sabik=$sabik;
$Shresta->officer=$officer;
$Shresta->user_id=$user_id;
$Shresta->save();
return redirect('ShrestaController');
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
         $Shresta=\App\Shresta::find($id);
     return view('ghar_jagga_jamin.shresta_edit')->with('data',$Shresta);
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
         $patra_sankya=request()->patra_sankya;
$chalani_no=request()->chalani_no;
$issued_date=request()->issued_date;
$letter_subject=request()->letter_subject;
$office_name=request()->office_name;
$office_address=request()->office_address;
$local_state=request()->local_state;
$ward=request()->ward;
$sabik_address=request()->sabik_address;
$sabik_ward=request()->sabik_ward;
$grand_father=request()->grand_father;
$father=request()->father;
$child_name=request()->child_name;
$prop_type=request()->prop_type;
// start here
$sabik_vdc_name=implode(',',request()->sabik_vdc_name);
$sabik_ward_no=implode(',',request()->sabik_ward_no);
$nagarpalika_name=implode(',',request()->nagarpalika_name);
$ward_no=implode(',',request()->ward_no);
$kitta_no=implode(',',request()->kitta_no);
$area=implode(',',request()->area);
// end
$hakim_ko_name=request()->hakim_ko_name;
$nibedak_name=request()->nibedak_name;
$nibedak_address=request()->nibedak_address;
$nibedak_citizenship_no=request()->nibedak_citizenship_no;
$nibedak_nid=request()->nibedak_nid;
$jagga_dhani=request()->jagga_dhani;
$sabik_type=request()->sabik_type;
$grand_child=request()->grand_child;
$child=request()->child;
$sabik=request()->sabik;
$officer=request()->officer;
$user_id=request()->user_id;

$Shresta=\App\Shresta::find($id);
   $Shresta->patra_sankya=$patra_sankya;
$Shresta->chalani_no=$chalani_no;
$Shresta->issued_date=$issued_date;
$Shresta->letter_subject=$letter_subject;
$Shresta->office_name=$office_name;
$Shresta->office_address=$office_address;
$Shresta->local_state=$local_state;
$Shresta->ward=$ward;
$Shresta->sabik_address=$sabik_address;
$Shresta->sabik_ward=$sabik_ward;
$Shresta->grand_father=$grand_father;
$Shresta->father=$father;
$Shresta->child_name=$child_name;
$Shresta->prop_type=$prop_type;
// start here
$Shresta->sabik_vdc_name=$sabik_vdc_name;
$Shresta->sabik_ward_no=$sabik_ward_no;
$Shresta->nagarpalika_name=$nagarpalika_name;
$Shresta->ward_no=$ward_no;
$Shresta->kitta_no=$kitta_no;
$Shresta->area=$area;
// end
$Shresta->hakim_ko_name=$hakim_ko_name;
$Shresta->nibedak_name=$nibedak_name;
$Shresta->nibedak_address=$nibedak_address;
$Shresta->nibedak_citizenship_no=$nibedak_citizenship_no;
$Shresta->nibedak_nid=$nibedak_nid;

$Shresta->jagga_dhani=$jagga_dhani;
$Shresta->sabik_type=$sabik_type;
$Shresta->grand_child=$grand_child;
$Shresta->child=$child;
$Shresta->sabik=$sabik;
$Shresta->officer=$officer;
$Shresta->user_id=$user_id;
$Shresta->save();
return redirect('ShrestaController');
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
