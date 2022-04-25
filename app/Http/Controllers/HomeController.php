<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Category;
use Session;
use Bsdate;
use Carbon\Carbon;
use Helpers;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $panjikaran= DB::table('category')
        ->where([
            ['sifaris_title','=','रास्ट्रिय पञ्जीकरण'],

        ])->get();
        $count_value=0;
        $arr_panji=array();
        foreach($panjikaran as $i){
            $table_name=$i->table_name;
            $user_id=auth()->user()->isAdmin;

            $count_panjikaran=DB::select("SELECT COUNT(*) c
                FROM $table_name
                WHERE user_id = $user_id");


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
            $user_id=auth()->user()->isAdmin;

            $count_citizen=DB::select("SELECT COUNT(*) c
                FROM $table_name
                WHERE user_id = $user_id");

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
            $user_id=auth()->user()->isAdmin;

            $count_org=DB::select("SELECT COUNT(*) c
                FROM $table_name
                WHERE user_id = $user_id");

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
            $user_id=auth()->user()->isAdmin;

            $count_home=DB::select("SELECT COUNT(*) c
                FROM $table_name
                WHERE user_id = $user_id");

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
            $user_id=auth()->user()->isAdmin;

            $count_edu=DB::select("SELECT COUNT(*) c
                FROM $table_name
                WHERE user_id = $user_id");

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
            $user_id=auth()->user()->isAdmin;

            $count_biz=DB::select("SELECT COUNT(*) c
                FROM $table_name
                WHERE user_id = $user_id");

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
            $user_id=auth()->user()->isAdmin;

            $count_eco=DB::select("SELECT COUNT(*) c
                FROM $table_name
                WHERE user_id = $user_id");

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
            $user_id=auth()->user()->isAdmin;

            $count_open=DB::select("SELECT COUNT(*) c
                FROM $table_name
                WHERE user_id = $user_id");

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
            $user_id=auth()->user()->isAdmin;

            $count_other=DB::select("SELECT COUNT(*) c
                FROM $table_name
                WHERE user_id = $user_id");

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


        $distinct_sifaris_title = DB::select("SELECT DISTINCT sifaris_title FROM category");


            // for pc user
        $local_state_id=auth()->user()->local_state_id;

         $ward_suchi=DB::select("SELECT isAdmin from users  where local_state_id=$local_state_id AND user_type='WP' ORDER BY isAdmin");



        return view('home')->with(
            ['panji_max'=>$panji_max,

            'citizen_max'=>$citizen_max,
            'home_max'=>$home_max,
            'org_max'=>$org_max,
            'biz_max'=>$biz_max,
            'edu_max'=>$edu_max,
            'eco_max'=>$eco_max,
            'open_max'=>$open_max,
            'other_max'=>$other_max,
            'distinct_sifaris_title'=>$distinct_sifaris_title,
            'ward_suchi'=>$ward_suchi,
        ]


    );
    }

    public function get_readable_name($sifaris_title,$sifaris_title2=''){

        if(empty($sifaris_title2)){


        $data=DB::select("SELECT * from category where sifaris_title=\"$sifaris_title\"");
        return response()->json(['success'=>$data]);
    }else{
        $main_sifaris=$sifaris_title.'/'.$sifaris_title2;
         $data=DB::select("SELECT * from category where sifaris_title=\"$main_sifaris\"");
         return response()->json(['success'=>$data]);
    }

    }

    public function date_wise(Request $request){

       $from=request()->mithi_dekhi;
       $exp_from= (explode("-",$from));
       $from_year=$exp_from[0];
       $from_month=$exp_from[1];
       $from_day=$exp_from[2];
       $to=request()->mithi_samma;
       $exp_to= (explode("-",$to));
       $to_year=$exp_to[0];
       $to_month=$exp_to[1];
       $to_day=$exp_to[2];
       $eng_from=Bsdate::nep_to_eng($from_year,$from_month,$from_day);
       $eng_to=Bsdate::nep_to_eng($to_year,$to_month,$to_day);
       $eng_to_final= "'".$eng_to['year'].'-'.$eng_to['month'].'-'.$eng_to['date']."'";
        $eng_from_final= "'".$eng_from['year'].'-'.$eng_from['month'].'-'.$eng_from['date']."'";
// dd($eng_from['num_day'] ,$eng_to);

       $db=request()->child;
       // Query for database
       //AND user_id=$user_ward")->tosql();
       // WHERE updated_at >= $eng_from_final
       // AND updated_at <= $eng_to_final" );
                     $user_ward=auth()->user()->isAdmin;
                       $data_grid = DB::select("SELECT $db.* FROM $db WHERE updated_at >= $eng_from_final AND updated_at <= $eng_to_final");




              //dd($data_grid);

            if(empty($data_grid)){
                     return view('empty.empty');
            }else{
                // panjikaran module

                        if($db=='birthcertificate'){
                          return view('panjikaran/search_print/birthcertificate_print')->with('data',$data_grid);
                        }
                         if($db=='deathcertificate'){
                          return view('panjikaran/search_print/deathcertificate_print')->with('data',$data_grid);
                        }
                        if($db=='marriage'){
                          return view('panjikaran/search_print/marriage_print')->with('data',$data_grid);
                        }
                         if($db=='migration'){
                          return view('panjikaran/search_print/migration_print')->with('data',$data_grid);
                        }
             // citizenship module
                         if($db=='citizencertificate'){
                          return view('citizenship/search_print/citizencertificate_print')->with('data',$data_grid);
                        }
                          if($db=='citizenship'){
                          return view('citizenship/search_print/citizenship_print')->with('data',$data_grid);
                        }

                         if($db=='citizensifaris'){
                          return view('citizenship/search_print/citizensifaris_print')->with('data',$data_grid);
                        }

                         if($db=='nagarikta'){
                          return view('citizenship/search_print/nagarikta_print')->with('data',$data_grid);
                        }

                        // ghar jagga jamin module
                        if($db=='tresnaksa'){
                            return view('ghar_jagga_jamin/search_print/tresnaksa_print')->with('data',$data_grid);
                        }

                        if($db=='kitta_kat_sifaris'){
                          $detail = DB::select("SELECT * FROM kitta_kat_jagga_bibaran where kitta_kat_id=".$data_grid[0]->id." ");
                            return view('ghar_jagga_jamin/search_print/KittaKatSifaris_print',compact('detail'))->with('data',$data_grid);
                        }

                        if($db=='ghar_bato_pramanit'){
                          $detail = DB::select("SELECT * FROM ghar_bato_pramanit_detail where ghar_bato_id=".$data_grid[0]->id." ");
                            return view('ghar_jagga_jamin/search_print/GharBatoPramanit_print',compact('detail'))->with('data',$data_grid);
                        }

                        if($db=='char_killa_pramanit'){
                          $detail = DB::select("SELECT * FROM char_killa_pramanit_detail where char_killa_id=".$data_grid[0]->id." ");
                            return view('ghar_jagga_jamin/search_print/CharKillaPramanit_print',compact('detail'))->with('data',$data_grid);
                        }


                        if($db=='jagga_dhani_purjama_gharkayem_sifaris'){
                            return view('ghar_jagga_jamin/search_print/JaggadhaniGharSifaris_print')->with('data',$data_grid);
                        }
                        if($db=='gharjagganamsarikitani'){
                            return view('ghar_jagga_jamin/search_print/gharjagganamsarikitani_print')->with('data',$data_grid);
                        }
                        if($db=='gharjagganamsarisifaris'){
                            return view('ghar_jagga_jamin/search_print/gharjagganamsarisifaris_print')->with('data',$data_grid);
                        }

                        if($db=='gharkayamsifaris'){
                            return view('ghar_jagga_jamin/search_print/gharkayamsifaris_print')->with('data',$data_grid);
                        }



                        if($db=='jagga_dhani_pramanpatra_pratilipi_sifaris'){
                            return view('ghar_jagga_jamin/search_print/JaggadhaniPratilipi_print')->with('data',$data_grid);
                        }

                        if($db=='ghar_patal_sifaris'){
                            return view('ghar_jagga_jamin/search_print/GharPatalSifaris_print')->with('data',$data_grid);
                        }
                        if($db=='muchulka'){

                            return view('ghar_jagga_jamin/search_print/muchulka_print')->with('data',$data_grid);
                        }
                        if($db=='muchulkaguthi'){
                            return view('ghar_jagga_jamin/search_print/muchulkaguthi_print')->with('data',$data_grid);
                        }

                        if($db=='sarjimin'){
                            return view('ghar_jagga_jamin/search_print/sarjimin_print')->with('data',$data_grid);
                        }

                        if($db=='wadasarjimin'){
                            return view('ghar_jagga_jamin/search_print/wadasarjimin_print')->with('data',$data_grid);
                        }
                        if($db == 'naksa'){
                            return view('ghar_jagga_jamin/search_print/naksa_print')->with('data',$data_grid);
                        }
                        if($db == 'shresta'){
                            return view('ghar_jagga_jamin/search_print/shresta_print')->with('data',$data_grid);
                        }
                        if($db == 'shrestauparsifaris'){
                            return view('ghar_jagga_jamin/search_print/shrestauparsifaris_print')->with('data',$data_grid);
                        }
                        if($db == 'suchanatas'){
                            return view('ghar_jagga_jamin/search_print/suchanatas_print')->with('data',$data_grid);
                        }
                        if($db == 'suchanatasguthi'){
                            return view('ghar_jagga_jamin/search_print/suchanatasguthi_print')->with('data',$data_grid);
                        }
                        //english format apache_get_modules

                        if($db == 'birth_date_verifications'){

                          return view('englishformat/search_print/birthdateverification_print')->with('data',$data_grid);
                        }

                        // if($db == 'relation_verifications' && $db == 'relation_verification_details'){
                        //
                        //   $detail = DB::select("SELECT * FROM relation_verification_details where relation_id=".$data_grid[0]->id." ");
                        //
                        //     return view('englishformat/search_print/relationverification_print',compact('detail'))->with('data',$data_grid);
                        // }
                        if($db=='relation_verifications'){
                          $detail = DB::select("SELECT * FROM relation_verification_details where relation_id=".$data_grid[0]->id." ");
                            return view('englishformat/search_print/relationverification_print',compact('detail'))->with('data',$data_grid);
                        }

                        if($db == 'occupation_verifications'){
                            return view('englishformat/search_print/occupationverification_print')->with('data',$data_grid);
                        }
                        if($db == 'unmarriedverification'){
                            return view('englishformat/search_print/UnmarriedVerification_print')->with('data',$data_grid);
                        }
                        if($db == 'addressverification'){
                            return view('englishformat/search_print/AddressVerification_print')->with('data',$data_grid);
                        }
                        if($db == 'verification_of_annual_income'){
                            return view('englishformat/search_print/annualincomeverification_print')->with('data',$data_grid);
                          }

                        // if($db == 'property_valuation' && $db == 'property_valuation_details'){
                        //     $detail = DB::select("SELECT * FROM property_valuation_details where relation_id=".$data_grid[0]->id." ");
                        //     return view('englishformat/search_print/PropertyValuation_print',compact('detail'))->with('data',$data_grid);
                        // }
                        if($db=='property_valuation'){
                          $detail = DB::select("SELECT * FROM property_valuation_details where relation_id=".$data_grid[0]->id." ");
                            return view('englishformat/search_print/PropertyValuation_print',compact('detail'))->with('data',$data_grid);
                        }
                        if($db == 'tax_clearances'){
                            return view('englishformat/search_print/TaxClearance_print')->with('data',$data_grid);

                        }

                        //samajhik pariwarki apache_get_modules

                        if($db == 'asthaie_basobas_sifaris'){
                            $detail = DB::select("SELECT * FROM basobas_sifaris_details where basobas_id=".$data_grid[0]->id." ");

                            return view('samajikpariwarik/search_print/asthaiebasobassifaris_print',compact('detail'))->with('data',$data_grid);
                        }
                        if($db == 'esthaie_basobas_sifaris'){
                          $detail = DB::select("SELECT * FROM esthaie_basobas_details where basobas_id=".$data_grid[0]->id." ");
                            return view('samajikpariwarik/search_print/esthaiebasobassifaris_print',compact('detail'))->with('data',$data_grid);
                        }
                        if($db == 'marriage_verifications'){
                            return view('samajikpariwarik/search_print/marriageverification_print')->with('data',$data_grid);
                        }
                        if($db == 'janmamiti_pramanits'){
                            return view('samajikpariwarik/search_print/janmamitiparmanit_print')->with('data',$data_grid);
                        }
                        if($db == 'abibahit_pramanits'){
                            return view('samajikpariwarik/search_print/abibahitpramanit_print')->with('data',$data_grid);
                        }
                        if($db == 'nata_pramanits'){
                          $detail = DB::select("SELECT * FROM nata_pramanit_details where nata_id=".$data_grid[0]->id." ");
                            return view('samajikpariwarik/search_print/natapramanit_print',compact('detail'))->with('data',$data_grid);
                        }
                        if($db == 'tinpuste_pramanits'){
                          $detail = DB::select("SELECT * FROM tinpuste_jagga_bibarans where tinpuste_id=".$data_grid[0]->id." ");
                          $bibaran = DB::select("SELECT * FROM tinpuste_detail_bibarans where tinpustedetail_id=".$data_grid[0]->id." ");
                            return view('samajikpariwarik/search_print/tinpustepramanit_print',compact('detail','bibaran'))->with('data',$data_grid);
                        }

                        if($db == 'internal_migration_sifaris'){
                          $detail = DB::select("SELECT * FROM internal_migration_details where migration_id=".$data_grid[0]->id." ");
                            return view('samajikpariwarik/search_print/internalmigrationsifaris_print',compact('detail'))->with('data',$data_grid);
                        }
                        if($db == 'nabalak_parichaye_patra_sifaris'){
                            return view('samajikpariwarik/search_print/nabalakparichayesifaris_print')->with('data',$data_grid);
                        }
                        if($db == 'mritak_hakdar_sifaris'){
                          $detail = DB::select("SELECT * FROM mritak_hakdar_sifaris_details where mritak_hakdar_id=".$data_grid[0]->id." ");
                            return view('samajikpariwarik/search_print/mirtakhakdarsifaris_print',compact('detail'))->with('data',$data_grid);
                        }
                        if($db == 'apanga_parichaye_patra_sifaris'){
                            return view('samajikpariwarik/search_print/apangaparichayasifaris_print')->with('data',$data_grid);
                        }

                        // bhautik nirman modules
                        if($db == 'dhara_jadan_sifaris'){
                          $detail = DB::select("SELECT * FROM dhara_jadan_sifaris_detail where dhara_jadan_sifaris_id=".$data_grid[0]->id." ");
                            return view('bhautiknirman/search_print/DharaJadanSifaris_print',compact('detail'))->with('data',$data_grid);
                        }
                        if($db == 'bijuli_jadan_sifaris'){
                          $detail = DB::select("SELECT * FROM bijuli_jadan_sifaris_detail where bijuli_jadan_sifaris_id=".$data_grid[0]->id." ");
                            return view('bhautiknirman/search_print/BijuliJadanSifaris_print',compact('detail'))->with('data',$data_grid);
                        }
                        if($db == 'sadak_khane_sifaris'){
                            return view('bhautiknirman/search_print/SadakKhaneSifaris_print')->with('data',$data_grid);
                        }
                        if($db == 'nepalsarkarko_naamma_bato_kayem_sifaris'){
                            return view('bhautiknirman/search_print/NepalSarkarBatokayem_print')->with('data',$data_grid);
                        }

                        //free
                        if($db == 'court_fee_narakhne_sifaris'){
                            return view('free/search_print/CourtFeeNarakhneSifaris_print')->with('data',$data_grid);
                        }
                        if($db == 'kotha_khali_sifaris'){
                            return view('free/search_print/KothaKhaliSifaris_print')->with('data',$data_grid);
                        }
                        if($db == 'mohi_lagat_katta_sifaris'){
                            return view('free/search_print/MohiLagatKattaSifaris_print')->with('data',$data_grid);
                        }
                        if($db == 'khulai_pathayeko'){
                            return view('free/search_print/KhulaiPathayeko_print')->with('data',$data_grid);
                        }

                        if($db == 'kakshyathap'){
                            return view('free/search_print/KakshyaThap_print')->with('data',$data_grid);
                        }
                        if($db == 'generalsifaris'){
                            return view('free/search_print/GeneralSifaris_print')->with('data',$data_grid);
                        }

                        if($db == 'generalsifarisenglish'){
                            return view('free/search_print/GeneralSifarisEnglish_print')->with('data',$data_grid);
                        }


                        // business
                        if($db == 'jet_machines'){
                            return view('busines/search_print/JetMachine_print')->with('data',$data_grid);
                        }

                        if($db == 'nonprofit'){
                            return view('org/search_print/nonprofit_print')->with('data',$data_grid);
                        }

                        if($db == 'sasthanabikaransifaris'){
                            return view('org/search_print/SasthaNabikaranSifaris_print')->with('data',$data_grid);
                        }

                        if($db == 'sasthadartasifarisa'){
                            return view('org/search_print/SasthaDartaSifaris_print')->with('data',$data_grid);
                        }

                        if($db == 'nirmanbebasaye'){
                            return view('busines/search_print/NirmanBebasaye_print')->with('data',$data_grid);
                        }

                        if($db == 'bebasayedartanaya'){
                            return view('busines/search_print/BebasayeDartaNaya_print')->with('data',$data_grid);
                        }
                        if($db == 'pannoa'){
                            return view('busines/search_print/Panno_print')->with('data',$data_grid);
                        }
                        if($db == 'karobarpanno'){
                            return view('busines/search_print/karobarpanno_print')->with('data',$data_grid);
                        }
                        //School
                        if($db == 'scholarship'){
                          // dd($data_grid);
                            return view('edu/search_print/Scholarship_print')->with('data',$data_grid);

                        }
                        if($db == 'bipanna'){
                          // dd($data_grid);
                            return view('edu/search_print/Bipanna_print')->with('data',$data_grid);

                        }

                        if($db == 'upacharsahayogsifaris'){
                          // dd($data_grid);
                            return view('eco/search_print/UpacharSahayogSifaris_print')->with('data',$data_grid);

                        }

                        //other
                        if($db == 'faraknametharnagarikta'){
                          // dd($data_grid);
                            return view('other/search_print/FarakNameTharNagarikta_print')->with('data',$data_grid);

                        }
                        if($db == 'farakfarakjanmamitipramanit'){
                          // dd($data_grid);
                            return view('other/search_print/FarakFarakJanmamitiPramanit_print')->with('data',$data_grid);

                        }

                        if($db == 'farakfarakenglishhijepramanit'){
                          // dd($data_grid);
                            return view('other/search_print/FarakFarakEnglishHijePramanit_print')->with('data',$data_grid);

                        }

                        if($db == 'farakfaraknametharpramanit'){
                          // dd($data_grid);
                            return view('other/search_print/FarakFarakNameTharPramanit_print')->with('data',$data_grid);

                        }










                }

    }




}
