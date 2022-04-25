<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\LetterHeadInfo;
use App\Helper\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'userList';

    public function redirectTo(){
       return 'userList';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    

     

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'isAdmin'=>$data['ward'],
            'password' => bcrypt($data['password']),
            'user_type'=>$data['user_type'],
            'provience_id'=>$data['prov'],
            'district_id'=>$data['district'],
            'local_state_id'=>$data['local_state'],

        ]);

        // $request->has('content') ? $request->input('content') : '';
    }

    protected function registerUser(Request $request)
    {

         // dd($request->all());
        $this->validator($request->all())->validate();

        $palika_id = $request->palika_id;

        $palikaUser = User::find($request->palika_id);
         // dd($palikaUser);
        $user = new User();

        $ward_no_np = Helpers::convertNos($request->ward); 
        //{{Helpers::wardNames(auth()->user()->isAdmin)}}
        // dd($ward_no_np);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->isAdmin = $request->ward;
        $user->password = bcrypt($request->password);
        $user->user_type = "WP";
        $user->provience_id = $palikaUser->provience_id;
        $user->district_id = $palikaUser->district_id;
        $user->local_state_id = $palikaUser->local_state_id;
        $user->ward_no_np = $ward_no_np;
        $user->ward_name_np = $request->ward_name_np;
        $user->ward_name_en = $request->ward_name_en;
        $user->ward_office = $request->ward_office;
        $user->ward_office_en = $request->ward_office_en;
        $user->telephone_num = $request->telephone_num;
        $user->telephone_num_en = $request->telephone_num_en;
        $user->fax_number = $request->fax_number;
        $user->fax_number_en = $request->fax_number_en;
        $user->office_email = $request->office_email;
        $user->website = $request->website;
        $user->palika_id = $request->palika_id;

        $user->save();

        return redirect()->route('wardUsers',[$palika_id]);
        // return redirect()->back();

    }

    public function wardUsers($id){
        $wardUsers = User::where('palika_id',$id)->where('user_type','WP')->get();
        $palika_id = $id;
        return view('admin/ward_user_list',[
            'wardUsers' => $wardUsers,
            'palika_id' => $palika_id
        ]);
    }

    public function wardRegisterForm($palika_id)
    {
        return view('admin/register_ward_user',[
            'palika_id' => $palika_id
        ]);
    }

    public function userList(){

        $palikaUsers = User::with(['district','provience' ,'localState'])->where('palika_id',0)->where('user_type','WP')->get();
        // dd($palikaUsers);
        return view('admin/user_list',[
            'palikaUsers' => $palikaUsers
        ]);
    }

    public function editUserForm($id)
    {
        $user = User::find($id);
        return view('admin/edit_user',[
            'user' => $user
        ]);
    }

    public function updateUser(Request $request,$id)
    {
        

        $wardNo = $request->ward ? $request->ward : 0;
        $ward_name_np = $request->ward_name_np ? $request->ward_name_np : '';
        $ward_name_en = $request->ward_name_en ? $request->ward_name_en : '';

        $ward_no_np = Helpers::convertNos($request->ward); 

        $user = User::find($id);
        // dd($ward_name_np);
       
        //{{Helpers::wardNames(auth()->user()->isAdmin)}}
        // dd($ward_no_np);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->isAdmin = $wardNo;
        $user->user_type = "WP";
        // $user->provience_id = $palikaUser->provience_id;
        // $user->district_id = $palikaUser->district_id;
        // $user->local_state_id = $palikaUser->local_state_id;
        $user->ward_no_np = $ward_no_np;
        $user->ward_name_np = $ward_name_np;
        $user->ward_name_en = $ward_name_en;
        // $user->ward_office = $request->ward_office;
        // $user->ward_office_en = $request->ward_office_en;
        $user->telephone_num = $request->telephone_num;
        $user->telephone_num_en = $request->telephone_num_en;
        $user->fax_number = $request->fax_number;
        $user->fax_number_en = $request->fax_number_en;
        $user->office_email = $request->office_email;
        $user->website = $request->website;
        

        $user->save();
        $request->session()->flash('message', 'Category deleted successfully.');

        if($user->isAdmin != 0){

            return redirect()->route('wardUsers',[$user->palika_id]);
        }
        else{

            return redirect()->route('userList');
            // return redirect()->back();
        }
    }

    public function deleteUser(Request $request,$id)
    {
        $user = User::find($id);

        $palika_id = $user->palika_id;
        // dd($palika_id);

        if(($palika_id == 0) && ($user->user_type == "WP"))
        {
            $wardUsers = User::where('palika_id',$id)->where('user_type','WP')->get();
            foreach ($wardUsers as $wardUser ) {
                $wardUser->delete();
            }
        }

        $user->delete();
        // $request->session()->flash('message', 'Category deleted successfully.');
        return redirect()->back();
    }

    public function district($provience){

        $data=DB::select("SELECT * from district where province_id=$provience");
         return response()->json(['success'=>$data]);
    }

    public function local_state($district){

        $data=DB::select("SELECT * from local_state where district_id=$district");
         return response()->json(['success'=>$data]);
    }



    public function clients(){
     $data= DB::table('users')
        ->Join('local_state', 'users.local_state_id', '=', 'local_state.local_state_id')
        ->Join('district', 'users.district_id', '=', 'district.district_id')
        ->Join('province', 'users.provience_id', '=', 'province.province_id')
        ->select('users.*', 'local_state.*', 'province.*','district.*')
        ->get();
        return view('admin/client_details')->with('data',$data);
    }



}
