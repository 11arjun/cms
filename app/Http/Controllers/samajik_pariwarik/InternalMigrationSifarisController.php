<?php

namespace App\Http\Controllers\samajik_pariwarik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\InternalMigrationSifaris;
use App\InternalMigrationDetail;

class InternalMigrationSifarisController extends Controller
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
        $data = DB::select("SELECT * FROM internal_migration_sifaris where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        // /dd($data);
        $detail = DB::select("SELECT * FROM internal_migration_details where migration_id=".$data[0]->id." ");
      if($data!=null){
        return view('samajikpariwarik/print/internalmigrationsifaris_print',compact('detail'))->with('data',$data[0]); 
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
        return view('samajikpariwarik/internalmigrationsifaris_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input=$request->all();
        $internalmigration = new InternalMigrationSifaris;
        $relationdetail = new InternalMigrationDetail;
          $internalmigration->patra_sankya = $request->patra_sankya;
          $internalmigration->chalani_no = $request->chalani_no;
          $internalmigration->issued_date = $request->issued_date;
          $internalmigration->person_title = $request->person_title;
          $internalmigration->person_name = $request->person_name;
          $internalmigration->office_address = $request->office_address;
          $internalmigration->house_owner = $request->house_owner;
          $internalmigration->migration_date = $request->migration_date;
          $internalmigration->district = $request->district;
          $internalmigration->palika_options = $request->palika_options;
          $internalmigration->ward_no = $request->ward_no;
          $internalmigration->migration_place = $request->migration_place;
          $internalmigration->nibedak_name = $request->nibedak_name;
          $internalmigration->nibedak_address = $request->nibedak_address;
          $internalmigration->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $internalmigration->nibedak_nid = $request->nibedak_nid;
          $internalmigration->user_id = $request->user_id;
          $internalmigration->save();
          $id = $internalmigration->id;


          $migration_id = $request->migration_id;
          $full_name = $request->full_name;
          $relation = $request->relation;
          $citizenship_no = $request->citizenship_no;
          $ghar_no = $request->ghar_no;
          $batto_name = $request->batto_name;
          $age = $request->age;
        for($i=0; $i<count($full_name); $i++){
              $relation_data = array('migration_id' => $id,
                'full_name' => $full_name[$i],
                'relation' => $relation[$i], 
                'citizenship_no' => $citizenship_no[$i],
                'ghar_no' => $ghar_no[$i],
                'batto_name' => $batto_name[$i],
                'age' => $age[$i],
              );
              $relationdetail->create($relation_data); 
          }

       return redirect('internalmigrationsifaris');
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
        $data= InternalMigrationSifaris::find($id);
        
        //$detail = RelationVerificationDetail::find($data->id); 
        $detail = DB::select("SELECT * FROM internal_migration_details where migration_id=".$data->id." ");
        
        return view('samajikpariwarik.internalmigrationsifaris_edit',compact('detail','data'));
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
        $internalmigration = InternalMigrationSifaris::find($id);
            $input = $request->except(['_method','_token','save_internal_mirgration_sifaris_data','migration_id','full_name','relation','citizenship_no','ghar_no','batto_name','age']);
        $relationdetail = new InternalMigrationDetail;
        InternalMigrationSifaris::where('id', $id)
          ->update($input);
        InternalMigrationDetail::where('migration_id',$id)->delete();

          $migration_id = $request->migration_id;
          $full_name = $request->full_name;
          $relation = $request->relation;
          $citizenship_no = $request->citizenship_no;
          $ghar_no = $request->ghar_no;
          $batto_name = $request->batto_name;
          $age = $request->age;
        for($i=0; $i<count($full_name); $i++){
              $relation_data = array('migration_id' => $id,
                'full_name' => $full_name[$i],
                'relation' => $relation[$i], 
                'citizenship_no' => $citizenship_no[$i],
                'ghar_no' => $ghar_no[$i],
                'batto_name' => $batto_name[$i],
                'age' => $age[$i],
              );
              $relationdetail->create($relation_data); 
          }

       return redirect('internalmigrationsifaris');
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
