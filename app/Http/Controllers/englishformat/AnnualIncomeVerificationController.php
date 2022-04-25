<?php

namespace App\Http\Controllers\englishformat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\VerificationofAnnualIncome;


class AnnualIncomeVerificationController extends Controller
{
    public function index()
    {
        //
        $usr_id=auth()->user()->isAdmin;
        $data = DB::select("SELECT * FROM  verification_of_annual_income  where user_id=$usr_id ORDER BY id DESC LIMIT 1 ");
        
      if($data!=null){
        return view('englishformat/print/annualincomeverification_print')->with('data',$data[0]); 
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
          return view('englishformat/annualincomeverification_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $ref_no=request()->ref_no;
        $issued_date=request()->issued_date;
        $person_title=request()->person_title;
        $person_name=request()->person_name;
        $address=request()->address;
        $total_income=request()->total_income;

        //start
        $applicant_relation=implode(',',request()->applicant_relation);
        $parties_name=implode(',',request()->parties_name);
        $annual_income=implode(',',request()->annual_income);
        $remarks=implode(',',request()->remarks);

    
        //end

        $total_nepali_rs=request()->total_nepali_rs;

        $total_us_dollar=request()->total_us_dollar;

        $us_dollar=request()->us_dollar;

        $officer_title=request()->officer_title;
        $officer_name=request()->officer_name;
      
        $nibedak_name=request()->nibedak_name;
        $nibedak_address=request()->nibedak_address;
        $nibedak_citizenship_no=request()->nibedak_citizenship_no;
        $nibedak_nid=request()->nibedak_nid;

        $user_id=request()->user_id;

        $annualincome = new \App\VerificationofAnnualIncome;
        $annualincome->ref_no=$ref_no;
        $annualincome->issued_date=$issued_date;
        $annualincome->address=$address;
        $annualincome->person_title=$person_title;
        $annualincome->person_name=$person_name;
        $annualincome->total_income=$total_income;
        $annualincome->total_nepali_rs=$total_nepali_rs;
        $annualincome->total_us_dollar=$total_us_dollar;
        $annualincome->us_dollar=$us_dollar;
        // dd($us_dollar);
        //start
        $annualincome->applicant_relation=$applicant_relation;
        $annualincome->parties_name=$parties_name;
        $annualincome->annual_income=$annual_income;
        $annualincome->remarks=$remarks;

        //end
        $annualincome->officer_title=$officer_title;
        $annualincome->officer_name=$officer_name;
        $annualincome->nibedak_name=$nibedak_name;
        $annualincome->nibedak_address=$nibedak_address;
        $annualincome->nibedak_citizenship_no=$nibedak_citizenship_no;
        $annualincome->nibedak_nid=$nibedak_nid;
        $annualincome->user_id=$user_id;

        $annualincome->save();
        return redirect('annualincomeverification');
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
        
         $annualincome=\App\VerificationofAnnualIncome::find($id);

     return view('englishformat.annualincomeverification_edit')->with('data',$annualincome);
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
        $ref_no=request()->ref_no;
        $issued_date=request()->issued_date;
        $address=request()->address;
        $person_title=request()->person_title;
        $person_name=request()->person_name;
        $total_income=request()->total_income;
       
        //start
        $applicant_relation=implode(',',request()->applicant_relation);
        $parties_name=implode(',',request()->parties_name);
        $annual_income=implode(',',request()->annual_income);
        $remarks=implode(',',request()->remarks);

        //end
        $total_nepali_rs=request()->total_nepali_rs;
        $total_us_dollar=request()->total_us_dollar;
        $us_dollar=request()->us_dollar;
        $officer_title=request()->officer_title;
        $officer_name=request()->officer_name;
        $nibedak_name=request()->nibedak_name;
        $nibedak_address=request()->nibedak_address;
        $nibedak_citizenship_no=request()->nibedak_citizenship_no;
        $nibedak_nid=request()->nibedak_nid;
        $user_id=request()->user_id;
        
        $annualincome = new \App\VerificationofAnnualIncome;
        $annualincome->ref_no=$ref_no;
        $annualincome->issued_date=$issued_date;
        $annualincome->address=$address;
        $annualincome->person_title=$person_title;
        $annualincome->person_name=$person_name;
        $annualincome->total_income=$total_income;
        $annualincome->total_nepali_rs=$total_nepali_rs;
        $annualincome->total_us_dollar=$total_us_dollar;
        $annualincome->us_dollar=$us_dollar;
        //start
        $annualincome->applicant_relation=$applicant_relation;
        $annualincome->parties_name=$parties_name;
        $annualincome->annual_income=$annual_income;
        $annualincome->remarks=$remarks;

        //end
        $annualincome->officer_title=$officer_title;
        $annualincome->officer_name=$officer_name;
        $annualincome->nibedak_name=$nibedak_name;
        $annualincome->nibedak_address=$nibedak_address;
        $annualincome->nibedak_citizenship_no=$nibedak_citizenship_no;
        $annualincome->nibedak_nid=$nibedak_nid;

        $annualincome->user_id=$user_id;

        $annualincome->save();
        return redirect('annualincomeverification');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
