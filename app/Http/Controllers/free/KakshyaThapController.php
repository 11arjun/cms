<?php

namespace App\Http\Controllers\free;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use KakshyaThap;


class KakshyaThapController extends Controller
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
      $data = DB::select("SELECT * FROM kakshyathap where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");

    if($data!=null){
      return view('free/print/KakshyaThap_print')->with('data',$data[0]);
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
       return view('free/KakshyaThap_create');
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
         $input=$request->all();
          $kakshyathap = new \App\KakshyaThap($input);
       $kakshyathap->save();
       return redirect('kakshyathap');
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

         $kakshyathap=\App\KakshyaThap::find($id);

      return view('free.KakshyaThap_edit')->with('data',$kakshyathap);
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
         $kakshyathap=\App\KakshyaThap::find($id);
             $input = $request->except(['_method','_token','save_kakshya_thap_sifaris']);

          \App\KakshyaThap::where('id', $id)
           ->update($input);

        return redirect('kakshyathap');

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
