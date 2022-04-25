<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Category;
use Session;
use Bsdate;
use Carbon\Carbon;
use Helpers;

class PalikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $local_state_id=auth()->user()->local_state_id;
  
         $ward_suchi=DB::select("SELECT isAdmin from users  where local_state_id=$local_state_id AND user_type='WP' ORDER BY isAdmin");
        return view('palika/index')->with('ward_suchi',$ward_suchi);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
        $ward=request()->ward;
        $from_date=request()->from_date;
        $to_date=request()->to_date;
        $panjikaran= DB::table('category')
        ->where([
            ['sifaris_title','=','रास्ट्रिय पञ्जीकरण'],

        ])->get();
        $count_value=0;
        $arr_panji=array();
        foreach($panjikaran as $i){
            $table_name=$i->table_name;
            $user_id=$ward;

            $count_panjikaran=DB::table($table_name)
                     ->select(DB::raw('count(*) as c'))
                     ->where('user_id', '=', $user_id)
                    ->where('updated_at','>=',$from_date)
                    ->where('updated_at','<=',$to_date)
            
                     ->get();


            $counter=$count_panjikaran[0];
            $count_value+=$counter->c;
            $arr_panji[]=$count_value;

        }

        $citizen= DB::table('category')
        ->where([
            ['sifaris_title','=','नेपाली नागरिकता'],

        ])->get();
         $count_value=0;
        $arr_citizen=array();
        foreach($citizen as $i){
            $table_name=$i->table_name;
            $user_id=$ward;

            $count_citizen=DB::table($table_name)
                     ->select(DB::raw('count(*) as c'))
                     ->where('user_id', '=', $user_id)
                    ->where('updated_at','>=',$from_date)
                    ->where('updated_at','<=',$to_date)
            
                     ->get();

            $counter=$count_citizen[0];




            $count_value+=$counter->c;
            $arr_citizen[]=$count_value;




        }

        $org= DB::table('category')
        ->where([
            ['sifaris_title','=','संघ संस्था'],

        ])->get();
         $count_value=0;
        $arr_org=array();
        foreach($org as $i){
            $table_name=$i->table_name;
            $user_id=$ward;

            $count_org=DB::table($table_name)
                     ->select(DB::raw('count(*) as c'))
                     ->where('user_id', '=', $user_id)
                    ->where('updated_at','>=',$from_date)
                    ->where('updated_at','<=',$to_date)
            
                     ->get();

            $counter=$count_org[0];




            $count_value+=$counter->c;
            $arr_org[]=$count_value;




        }

        $home= DB::table('category')
        ->where([
            ['sifaris_title','=','घर / जग्गा जमिन'],

        ])->get();
         $count_value=0;
        $arr_home=array();
        foreach($home as $i){
            $table_name=$i->table_name;
            $user_id=$ward;

            $count_home=DB::table($table_name)
                     ->select(DB::raw('count(*) as c'))
                     ->where('user_id', '=', $user_id)
                    ->where('updated_at','>=',$from_date)
                    ->where('updated_at','<=',$to_date)
            
                     ->get();

            $counter=$count_home[0];




            $count_value+=$counter->c;
            $arr_home[]=$count_value;




        }

        $edu= DB::table('category')
        ->where([
            ['sifaris_title','=','शैक्षिक'],

        ])->get();
         $count_value=0;
        $arr_edu=array();
        foreach($edu as $i){
            $table_name=$i->table_name;
            $user_id=$ward;

            $count_edu=DB::table($table_name)
                     ->select(DB::raw('count(*) as c'))
                     ->where('user_id', '=', $user_id)
                    ->where('updated_at','>=',$from_date)
                    ->where('updated_at','<=',$to_date)
            
                     ->get();

            $counter=$count_edu[0];




            $count_value+=$counter->c;
            $arr_edu[]=$count_value;




        }
        $biz= DB::table('category')
        ->where([
            ['sifaris_title','=','व्यापार / व्यवसाय'],

        ])->get();
         $count_value=0;
        $arr_biz=array();
        foreach($biz as $i){
            $table_name=$i->table_name;
            $user_id=$ward;

            $count_biz=DB::table($table_name)
                     ->select(DB::raw('count(*) as c'))
                     ->where('user_id', '=', $user_id)
                    ->where('updated_at','>=',$from_date)
                    ->where('updated_at','<=',$to_date)
            
                     ->get();

            $counter=$count_biz[0];




            $count_value+=$counter->c;
            $arr_biz[]=$count_value;




        }
        $eco= DB::table('category')
        ->where([
            ['sifaris_title','=','आर्थिक'],

        ])->get();
         $count_value=0;
        $arr_eco=array();
        foreach($eco as $i){
            $table_name=$i->table_name;
            $user_id=$ward;

            $count_eco=DB::table($table_name)
                     ->select(DB::raw('count(*) as c'))
                     ->where('user_id', '=', $user_id)
                    ->where('updated_at','>=',$from_date)
                    ->where('updated_at','<=',$to_date)
            
                     ->get();
            $counter=$count_eco[0];




            $count_value+=$counter->c;
            $arr_eco[]=$count_value;




        }
        $open= DB::table('category')
        ->where([
            ['sifaris_title','=','खुल्ला ढाँचा'],

        ])->get();
         $count_value=0;
        $arr_open=array();
        foreach($open as $i){
            $table_name=$i->table_name;
            $user_id=$ward;

            $count_open=DB::table($table_name)
                     ->select(DB::raw('count(*) as c'))
                     ->where('user_id', '=', $user_id)
                    ->where('updated_at','>=',$from_date)
                    ->where('updated_at','<=',$to_date)
            
                     ->get();

            $counter=$count_open[0];




            $count_value+=$counter->c;
            $arr_open[]=$count_value;




        }
        $other= DB::table('category')
        ->where([
            ['sifaris_title','=','अन्य'],

        ])->get();
         $count_value=0;
        $arr_other=array();
        foreach($other as $i){
            $table_name=$i->table_name;
            $user_id=$ward;

            $count_other=DB::table($table_name)
                     ->select(DB::raw('count(*) as c'))
                     ->where('user_id', '=', $user_id)
                    ->where('updated_at','>=',$from_date)
                    ->where('updated_at','<=',$to_date)
            
                     ->get();
            $counter=$count_other[0];




            $count_value+=$counter->c;
            $arr_other[]=$count_value;




        }
        $other_max=max($arr_other);
        $open_max=max($arr_open);
        $eco_max=max($arr_eco);
        $home_max=max($arr_home);
        $org_max=max($arr_org);
        $biz_max=max($arr_biz);
        $edu_max=max($arr_edu);

        $panji_max=max($arr_panji);
        $citizen_max=max($arr_citizen);



        $cat_max=['panji_max'=>$panji_max,

            'citizen_max'=>$citizen_max,
            'home_max'=>$home_max,
            'org_max'=>$org_max,
            'biz_max'=>$biz_max,
            'edu_max'=>$edu_max,
            'eco_max'=>$eco_max,
            'open_max'=>$open_max,
            'other_max'=>$other_max,
  
            
        ];

           return response()->json(['success'=>$cat_max]);
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
