<?php
namespace App\Http\Controllers\englishformat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\PropertyValuation;
use App\PropertyValuationDetails;

class PropertyValuationController extends Controller
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
        $data = DB::select("SELECT * FROM property_valuation  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        $detail = DB::select("SELECT * FROM property_valuation_details where relation_id=".$data[0]->id." ");
      if($data!=null){
        return view('englishformat/print/PropertyValuation_print',compact('detail'))->with('data',$data[0]); 
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
        return view('englishformat/PropertyValuation_create');
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
          $propertyvaluation = new PropertyValuation;
          $propertydetails = new PropertyValuationDetails;

          $propertyvaluation->ref_no = $request->ref_no;
          $propertyvaluation->issued_date = $request->issued_date;
          $propertyvaluation->title=$request->title;
          $propertyvaluation->title_name = $request->title_name;
          $propertyvaluation->address = $request->address;
          $propertyvaluation->total_amount = $request->total_amount;
          $propertyvaluation->total_amount_dollar = $request->total_amount_dollar;
          $propertyvaluation->dollar_to_nepali = $request->dollar_to_nepali;
          $propertyvaluation->user_id = $request->user_id;
          $propertyvaluation->nibedak_name = $request->nibedak_name;
          $propertyvaluation->nibedak_address = $request->nibedak_address;
          $propertyvaluation->nibedak_citizenship_no = $request->nibedak_citizenship_no;
          $propertyvaluation->nibedak_nid = $request->nibedak_nid;
          $propertyvaluation->save();

          $id = $propertyvaluation->id;

          $owner = $request->owner;
          $particular_plot_no = $request->particular_plot_no;
          $area = $request->area;
          $total_value = $request->total_value;
          $remarks = $request->remarks;
          for($i=0;$i<count($owner); $i++){
            $propertydetail = array('relation_id' => $id,
            'owner'=> $owner[$i],
            'particular_plot_no' => $particular_plot_no[$i],
            'area' => $area[$i],
            'total_value' => $total_value[$i],
            'remarks' => $remarks[$i],
          );
          $propertydetails->create($propertydetail); 
          }
       return redirect('propertyvaluation');
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

    $data= PropertyValuation::find($id);

    $detail = DB::select("SELECT * FROM property_valuation_details where relation_id=".$data->id." ");

     return view('englishformat.PropertyValuation_edit',compact('data','detail'));
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
        $ropertyvaluation= PropertyValuation::find($id);
        $input = $request->except(['_method','_token','save_property_valuation_data','owner','particular_plot_no','area','total_value','remarks']);
        $propertydetails = new PropertyValuationDetails;    
        PropertyValuation::where('id', $id)->update($input);
        PropertyValuationDetails::where('relation_id',$id)->delete();

        $owner = $request->owner;
        $particular_plot_no = $request->particular_plot_no;
        $area = $request->area;
        $total_value = $request->total_value;
        $remarks = $request->remarks;
        for($i=0;$i<count($owner); $i++){
          $propertydetail = array('relation_id' => $id,
          'owner'=> $owner[$i],
          'particular_plot_no' => $particular_plot_no[$i],
          'area' => $area[$i],
          'total_value' => $total_value[$i],
          'remarks' => $remarks[$i],
        );
        $propertydetails->create($propertydetail); 
        }

       return redirect('propertyvaluation');
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
