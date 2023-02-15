<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DateTime;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // return Validator::make($data, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);
    }
 
    public function step1(Request $request){
        // dd($request);
     $request->validate([
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'dob' => 'required|string',
        'phoneno' => 'required|string',
        'address' => 'required|string',

    ]);
    // dd($request);
    

            $regdata=$request->input();
            // dd($regdata);
            $request->session()->put('step1', $regdata);
            // dd($regdata);
             return view('investor');
    }
    public function step3(Request $request){
        //dd($request);
        // dd($request);
    //  $request->validate([
    //     'firstname' => 'required|string',
    //     'lastname' => 'required|string',
    //     'dob' => 'required|string',
    //     'phoneno' => 'required|string',
    //     'address' => 'required|string',

    // ]);
    

            $acreditstatus=$request->input();
            // dd($regdata);
            $request->session()->put('step3', $acreditstatus);
            // dd($regdata);
        return $this->create($request);

            //  return view('agreement');
    }
    public function step2(Request $request){
        // $accstatus=dd($request->input());
      $regdata2=$request->input();
    //   dd("ste2 executing;");
        $request->session()->put('step2', $regdata2);
        // return $this->create($request);
        return view('agreement');

    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(Request $request)
{
    $usertype=$request->input('type');
//  dd($usertype);
    $userinfo = $request->session()->get('step1');
    $status = $request->session()->get('step2');
    $userlogin = $request->session()->get('step3');
// dd($status);
    $date = new DateTime($userinfo['dob']);
    $dob = $date->format('Y-m-d');
   $check= User::create([
        'firstname' => $userinfo['firstname'],
        'lastname' => $userinfo['lastname'],
        'phoneno'=>$userinfo['phoneno'],
        'address'=>$userinfo['address'],
        'dob'=>$dob,
        'usertype'=>$usertype,
        'email'=>$userlogin['email'],
        'accreditstatus'=>$status['accreditstatus'],
        'password' => Hash::make($userlogin['password']),
    ]);
    // dd($check);
    return view('welcome');
}

public function step1fa(Request $request){
    // dd($request);

            $request->validate([
               'firstname' => 'required|string',
               'lastname' => 'required|string',
                'phoneno'=>'required|numeric',
                'phoneex'=>'required|numeric',
                'country'=>'required|string',
                'stateofop'=>'required|string'
           ]);
                   $regdata=$request->input();
                   $request->session()->put('step1fa', $regdata);
        //            // dd($regdata);
             return view('yourself');
           }
          
           public function step2fa(Request $request){
            // // dd($request);
            // $request->validate([
            //     'role' => 'required|string',
            //      'usercdrno'=>'required|numeric',
            //      'firmcdrno'=>'required|numeric',
            // ]); 

            
                           $regdata=$request->input();
                           $request->session()->put('step2fa', $regdata);
                     return view('afilate');
                   }
                
           public function step3fa(Request $request){
                   
            // $request->validate([
            //     'firmmail' => 'required|string',
            //     'firmurl' => 'required|string',
            //      'firmtype'=>'required|string',
            // ]); 
            
    
            // dd("hello");
                   
               
                           $regdata=$request->input();
                //            dd($regdata);
                           $request->session()->put('step3fa', $regdata);
                //            // dd($regdata);
                     return view('finace-create-account');
                   }
                   
     
           public function step4fa(Request $request){
            // $request->validate([
            //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //         'password' => ['required', 'string', 'min:8', 'confirmed'],
            // ]);
            $regdata=$request->input();
            $request->session()->put('step4fa', $regdata);
            return $this->store($request);
    }

public function store(Request $request)
{
    // dd("hello chal gya");
    $usertype=$request->input('type');

    $userinfo = $request->session()->get('step1fa');
    $usermoreinfo = $request->session()->get('step2fa');
    $firm= $request->session()->get('step3fa');
    $userlogin = $request->session()->get('step4fa');
    // return view('welcome');
    // C:\xampp\htdocs\swinvestment\project\resources\views\swinvest\welcome2.blade.php
    
// dd($userinfo,$usermoreinfo,$firm,$userlogin);
   $check= User::create([

        'firstname' => $userinfo['firstname'],
        'lastname' => $userinfo['lastname'],
        'phoneno'=>$userinfo['phoneno'],
        'phoneex'=>$userinfo['phoneex'],
        'country'=>$userinfo['country'],
        'stateofop'=>$userinfo['stateofop'],

        'email'=>$userlogin['email'],
        'password' => Hash::make($userlogin['password']),
        'role'=>$usermoreinfo['role'],
        'usercdrno'=>$usermoreinfo['usercdrno'],
        'firmcdrno'=>$usermoreinfo['firmcdrno'],
        'firmmail'=>$firm['firmmail'],
        'usertype'=>$usertype,
        'firmurl'=>$firm['firmurl'],
        'firmtype'=>$firm['firmtype'],
    ]);
    // dd($check);
    return view('welcome2');
   // dd("welcome is not executing");
}
}