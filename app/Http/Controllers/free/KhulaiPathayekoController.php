<?php
namespace App\Http\Controllers\free;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use KhulaiPathayeko;

class KhulaiPathayekoController extends Controller
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
        $data = DB::select("SELECT * FROM khulai_pathayeko where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");

      if($data!=null){
        return view('free/print/KhulaiPathayeko_print')->with('data',$data[0]);
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
         return view('free/KhulaiPathayeko_create');
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
            $khulaipathayeko = new \App\KhulaiPathayeko($input);
         $khulaipathayeko->save();
         return redirect('khulaipathayeko');
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

           $khulaipathayeko=\App\KhulaiPathayeko::find($id);

        return view('free.KhulaiPathayeko_edit')->with('data',$khulaipathayeko);
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
           $khulaipathayeko=\App\KhulaiPathayeko::find($id);
               $input = $request->except(['_method','_token','save_khulai_pathayeko_data']);

            \App\KhulaiPathayeko::where('id', $id)
             ->update($input);

          return redirect('khulaipathayeko');

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
