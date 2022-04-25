<?php

namespace App\Http\Controllers\Darta_Chalani;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Darta;
use Auth;

class DartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('darta.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
           $current_year=DB::select("SELECT budget_year from budgets where active=1");
        $current_year=$current_year[0]->budget_year;
          $office= DB::table('offices')->get();
          $reg_no= DB::table('registers')->get();
          $dept= DB::table('departments')->get();

        return view('darta.create')->with('current_year',$current_year)
                                    ->with('office',$office)
                                    ->with('reg_no',$reg_no)
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
        $darta_number=request()->darta_number;
         $darta_miti=request()->darta_miti;
         $subject=request()->subject;
         $patra_kisim=request()->patra_kisim;
         $patra_miti=request()->patra_miti;
         $pathauney_karyalaya=request()->pathauney_karyalaya;
         $pathauney_thegana=request()->pathauney_thegana;
         $chalani_no=request()->chalani_no;
         $kaifiyat=request()->kaifiyat;
         $sakha=request()->sakha;
         $ward=request()->ward;

        $pc = new \App\Darta;
        $pc->reg_no = $darta_number;
        $pc->reg_date =$darta_miti;
        $pc->subject = $subject;
        $pc->msg_type =$patra_kisim;
        $pc->msg_date =$patra_miti;
        $pc->sender_office=$pathauney_karyalaya;
        $pc->sender_office_address=$pathauney_thegana;
        $pc->msg_proceed_no=$chalani_no;
        $pc->extra_text=$kaifiyat;
        $pc->verified_by=$sakha;
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
        $data=DB::table('registers')->where([
    ['id','=',$id]
])
->orderby('reg_no','asc')
->paginate(100);
        return view('darta.karbahi_entry')->with('data',$data)->with('id',$id);
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
        $karbahi=request()->karbahi;
      if($karbahi==null){
        return back()->withErrors(['msg', 'Field is blank']);
      }else{

         $pc = new \App\Darta;

        $pc=$pc->find($id);

       $pc->karbahi = $karbahi;

        $pc->save();
        return redirect('darta');
      }
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
             DB::table('registers')->where('id', '=', $id)->delete();
         return response()->json(['success'=>'Data deleted succesfully']);

    }

    public function find_darta(Request $request){
        $year=request()->year;
        $ward=auth()->user()->isAdmin;
$data=DB::table('registers')->where([
    ['reg_date','Like',"$year%"],
    ['ward','=',$ward],
    ['karbahi','=',null]
])
->orderby('reg_no','asc')
->paginate(100);
return view('darta.find_year')->with('data',$data)->with('year',$year);

    }


public function karbahipatra($year){

        $ward=auth()->user()->isAdmin;
$data=DB::table('registers')->where([
    ['reg_date','Like',"$year%"],
    ['ward','=',$ward],
    ['karbahi','!=',null]
])
->orderby('reg_no','asc')
->paginate(100);

return view('darta.karbahi_patra')->with('data',$data);
}

}
