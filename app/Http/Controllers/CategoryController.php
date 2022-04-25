<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $panjikaran= DB::table('category')
                ->where([
                    ['sifaris_title','=','रास्ट्रिय पञ्जीकरण'],

            ])->get();

                 $cit= DB::table('category')
                ->where([
                    ['sifaris_title','=','नेपाली नागरिकता'],

            ])->get();


                  $ghar= DB::table('category')
                ->where([
                    ['sifaris_title','=','घर / जग्गा जमिन'],

            ])->get();

                 $org= DB::table('category')
                ->where([
                    ['sifaris_title','=','संघ संस्था'],

            ])->get();


                 $biz= DB::table('category')
                ->where([
                    ['sifaris_title','=','व्यापार / व्यवसाय'],

            ])->get();


                 $edu= DB::table('category')
                ->where([
                    ['sifaris_title','=','शैक्षिक'],

            ])->get();

            $bhautik= DB::table('category')
           ->where([
               ['sifaris_title','=','भौतिक निर्माण'],

       ])->get();

            $english= DB::table('category')
           ->where([
               ['sifaris_title','=','English Format'],

       ])->get();

                 $eco= DB::table('category')
                ->where([
                    ['sifaris_title','=','आर्थिक'],

            ])->get();

              $samjik = DB::table('category')
                ->where([
                  ['sifaris_title', '=', 'सामाजिक / पारिवारिक'],
                  ])->get();

                 $free= DB::table('category')
                ->where([
                    ['sifaris_title','=','खुल्ला ढाँचा'],

            ])->get();

                $other= DB::table('category')
                ->where([
                    ['sifaris_title','=','अन्य'],

            ])->get();

        return view('category/index')->with([
            'panjikaran'=>$panjikaran,
            'cit'=>$cit,
            'ghar'=>$ghar,
            'org'=>$org,
            'biz'=>$biz,
            'edu'=>$edu,
            'bhautik'=>$bhautik,
            'english'=>$english,
            'eco'=>$eco,
            'samjik'=>$samjik,
            'free'=>$free,
            'other'=>$other,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $data = DB::select("SELECT table_name FROM information_schema.tables WHERE table_type = 'base table' AND table_schema='dartasifaris'");
        return view('category/category_create')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $input=$request->all();
          $cat = new \App\Category($input);
       $cat->save();
       Session::flash('message', 'Data Added To Database Successfully!');
       return redirect('category/create');
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
