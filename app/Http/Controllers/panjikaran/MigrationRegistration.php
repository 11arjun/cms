<?php

namespace App\Http\Controllers\panjikaran;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MigrationRegistrations;
use App\MigrationDetail;

class MigrationRegistration extends Controller
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
        $data = DB::select("SELECT * FROM migration  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // dd($data[0]);
        $detail = DB::select("SELECT * FROM migration_details where migration_id=".$data[0]->id." ");
        
      if($data!=null){
        return view('panjikaran/print/migration_print_v1',compact('detail'))->with('data',$data[0]); 
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
        return view('panjikaran/migrate_create_v1');
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
         $migration = new MigrationRegistrations();
         $migration->registration_no = $request->registration_no;
         $migration->registration_date = $request->registration_date;
         $migration->reg_date = $request->reg_date;
         $migration->applicant_name = $request->applicant_name;
         $migration->applicant_name_eng = $request->applicant_name_eng;
         $migration->permanent_address_np = $request->permanent_address_np;
         $migration->permanent_address_en = $request->permanent_address_en;
         $migration->citizenship_no = $request->citizenship_no;
         $migration->citizen_no_eng = $request->citizen_no_eng;
         $migration->father_name_np = $request->father_name_np;
         $migration->father_name_en = $request->father_name_en;
         $migration->mother_name_np = $request->mother_name_np;
         $migration->mother_name_en = $request->mother_name_en;
         $migration->migrated_form_address_np = $request->migrated_form_address_np;
         $migration->migrated_form_address_en = $request->migrated_form_address_en;
         $migration->local_registar_name = $request->local_registar_name;
         $migration->local_registar_name_eng = $request->local_registar_name_eng;
         $migration->user_id = $request->user_id;

         $migration->save();
         $id = $migration->id;

         $migrationDetail = new MigrationDetail();
         $fullname_np = $request->fullname_np;
         $dob_np = $request->dob_np;
         $relation_np = $request->relation_with_informant_np;
         $primary_legal_id_np = $request->primary_legal_id_np;
         $fullname_en = $request->fullname_en;
         $dob_en = $request->dob_en;
         $relation_en = $request->relation_with_informant_en;
         $primary_legal_id_en = $request->primary_legal_id_en;


         for($i=0; $i<count($fullname_np); $i++){
              $migration_data = array(
                'migration_id' => $id,
                'fullname_np'=> $fullname_np[$i],
                'fullname_en'=> $fullname_en[$i],
                'dob_np' => $dob_np[$i],
                'relation_with_informant_np' => $relation_np[$i],
                'relation_with_informant_en' => $relation_en[$i],
                'primary_legal_id_np' => $primary_legal_id_np[$i], 
                'primary_legal_id_en' => $primary_legal_id_en[$i], 
              );
              $migrationDetail->create($migration_data); 
          }
         return redirect('migration');
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
        $MigrationRegistrations=\App\MigrationRegistrations::find($id);
     return view('panjikaran.migrate_edit')->with('data',$MigrationRegistrations);
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
