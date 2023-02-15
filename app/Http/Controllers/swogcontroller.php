<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use DB;
class swogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        dd($request);
    }
    public function swog(Request $request)
    {
        // dd($request);
        // dd("hello");
    
        return view('swinvest/swog');
    }
    
    public function swog2(Request $request)
    {
        // dd($request);
        // return view('swinvest/swog2');
        $swog2=$request->input();
        $request->session()->put('swog2', $swog2);
        return view('swinvest/swog2');

    }
    public function swog3(Request $request)
    {
        // dd($request);
        // return view('swinvest/swog3');
        $swog3=$request->input();
        $request->session()->put('swog3', $swog3);
        return view('swinvest/swog3');


    }
    
    public function swog4(Request $request)
    {
        // dd($request);
        
        $swog4=$request->input();
        $request->session()->put('swog4', $swog4);
        return view('swinvest/swog4');


    }
    public function swog5(Request $request)
    {
        // dd($request);
        // return view('swinvest/swog5');

        $swog5=$request->input();
        $request->session()->put('swog5', $swog5);
        return view('swinvest/swog5');

    }
    public function swog6(Request $request)
    {
        // dd($request);
        
        $swog6=$request->input();
        $request->session()->put('swog6', $swog6);
        return view('swinvest/swog6');


    }
    
    public function swog7(Request $request)
    {
        // dd($request);
        $swog7=$request->input();
        $request->session()->put('swog7', $swog7);
        return view('swinvest/swog7');
    }
    
    public function swog8(Request $request)
    {
    //    dd($request);
    //    return view('swinvest/swog8');
    
    $swog8=$request->input();
    $request->session()->put('swog8', $swog8);
    // dd($request);
    return view('swinvest/swog8');
        
    }
    
    public function swog9(Request $request)
    {
        // dd("hello");
    //    dd($request);
     $swog9=$request->input();
     $request->session()->put('swog9', $swog9);
        return view('swinvest/swog9');
    }
    
    public function swog10(Request $request)
    {
return view('swinvest/swog10');
    }
    
    public function swog13(Request $request)
    {
            $swog10=$request->input();
            // dd($swog10);
            $request->session()->put('swog10', $swog10);
            return view('swinvest/swog13');
    }
    
    public function swog14()
    {
        
        // dd($request);
        return view('swinvest/swog14');
    }
    
    public function swog15(Request $request)
    {
 

    $swog2 = $request->session()->get('swog2');


    $swog3 = $request->session()->get('swog3');

    $swog4 = $request->session()->get('swog4');

    $swog5 = $request->session()->get('swog5');
    $swog6 = $request->session()->get('swog6');

    $swog7 = $request->session()->get('swog7');

    $swog8 = $request->session()->get('swog8');
    $swog9 = $request->session()->get('swog9');


    $swog10 = $request->session()->get('swog10');



//  dd($swog2,$swog3,$swog4,$swog5,
//  $swog6,$swog7,$swog8,$swog9,$swog10);
    DB::table('swog')->insert(
        array(
        'amount' => $swog2['amount'],
        'investingentity' => $swog3['investingentity'],
        'firstname'=>$swog4['firstname'],
        'middlename'=>$swog4['middlename'],
        'lastname'=>$swog4['lastname'],
        'suffix'=>$swog4['suffix'],
        'dob'=>$swog4['dob'],
        'taxinfo'=>$swog4['taxinfo'],
        'address1'=>$swog5['address1'],
        'address2'=>$swog5['address2'],
        'country'=>$swog4['country'],
        'nature'=>$swog6['nature'],
        'detail'=>$swog6['detail'],
        'investorsuitabilty'=>$swog7['investorsuitability'],
        'accreditstatus'=>$swog8['accreditstatus'],
        'taxelection'=>$swog9['taxelection'],
        'signature'=>$swog10['signature'],
        'reviewdoc'=>$swog10['reviewdoc'],

    )
);
     
dd("ginga la la hu hu");
        return view('swinvest/swog15');
    }
    
    // public function swog17()
    // {
        
    //     // dd($request);
    //     return view('swinvest/swog17');
    // }
    public function portfolio()
    {
        
        // dd($request);
        return view('swinvest/portfolio');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
