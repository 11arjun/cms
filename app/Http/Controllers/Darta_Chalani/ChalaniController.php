<?php

namespace App\Http\Controllers\Darta_Chalani;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Chalani;
use Auth;

class ChalaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

          $office= DB::table('offices')->get();
          // dd($office);
          $pro_no= DB::table('proceeds')->get();
          // dd($pro_no);
          $dept= DB::table('departments')->get();

           return view('chalani.create')
                                    ->with('office',$office)
                                    ->with('pro_no',$pro_no)
                                    ->with('dept',$dept);
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
         $chalani_number=request()->chalani_number;
         $chalani_miti=request()->chalani_miti;
         $subject=request()->subject;
         $patra_kisim=request()->patra_kisim;

         $pauney_karyalaya=request()->pauney_karyalaya;
         $pauney_thegana=request()->pauney_thegana;

         $kaifiyat=request()->kaifiyat;
         $sakha=request()->sakha;
         $ward=request()->ward;
         $bodartha=request()->bodartha;

        $pc = new \App\Chalani;
        $pc->pro_no = $chalani_number;
        $pc->pro_date =$chalani_miti;
        $pc->subject = $subject;
        $pc->msg_type =$patra_kisim;

        $pc->reciever_office=$pauney_karyalaya;
        $pc->reciever_office_address=$pauney_thegana;

        $pc->extra_text=$kaifiyat;
         $pc->verified_by=$sakha;
         $pc->cc=$bodartha;
        $pc->ward=$ward;



        $pc->save();



        return response()->json(['success'=>'successfully added to database']);
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
          $id = str_replace('"', '', $id);
             DB::table('proceeds')->where('id', '=', $id)->delete();
         return response()->json(['success'=>'Data deleted succesfully']);
    }
}
