<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use DB;
class investmentdetail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function step1(Request $request)
    {
        //
        // dd("executing");
        // dd($request);
        
        $step1=$request->input();
        // dd($step1);
        $request->session()->put('step1', $step1);
        // dd($regdata);
         return view('swinvest/goal2');
    }
    public function step2(Request $request)
    {
        //
        // dd("executing");
        // dd($request);
        
        $step2=$request->input();
        // dd($step2);
        $request->session()->put('step2', $step2);
        // dd($regdata);
         return view('swinvest/goal3');
    }
    public function step3(Request $request)
    {
        //
        // dd("executing");
        // dd($request);
        // dd($request);
        $step3=$request->input();
        // dd($step3);
        // dd($step3);
        $request->session()->put('step3', $step3);
        // dd($regdata);
         return view('swinvest/goal4');
    }
    public function step4(Request $request)
    {
        //
        // dd("executing");
        // dd($request);
        
        $step4=$request->input();
        // dd($step4);
        $request->session()->put('step4', $step4);
        // dd($regdata);
         return view('swinvest/goal5');
    }
    public function step5(Request $request)
    {
        //
        // dd("executing");
        // dd($request);
        
        $step5=$request->input();
        // dd($step5);
        $request->session()->put('step5', $step5);
        // dd($regdata);
         return view('swinvest/goal6');
    }
    public function step6(Request $request)
    {
        //
        // dd("executing");
        // dd($reque    $userinfo = $request->session()->get('step1');st);
          

        $step6=$request->input();
        // dd($step6);
        $request->session()->put('step6', $step6);

        $step1info = $request->session()->get('step1');
        $step2info = $request->session()->get('step2');
        $step3info = $request->session()->get('step3');
        $step4info = $request->session()->get('step4');
        $step5info = $request->session()->get('step5');
        $step6info = $request->session()->get('step6');
        //  dd($step1info,$step2info,$step3info,$step4info,$step5info,$step6info);
        // dd($regdata);

        
        DB::table('investment_detail')->insert(
            array(
            'goal' => $step1info['goal'],
            'comment' => $step1info['comment'],
            'perallocate'=>$step2info['perallocate'],
            'recommended_inv'=>$step3info['recommended_inv'],
             'comment1'=>$step3info['comment1'],
            'desiredinvtime'=>$step4info['desiredinvtime'],
            'timetocomplete' =>$step5info['timetocomplete'],
             'comment2'=>$step6info['comment2'],
             'decisionmaker'=>$step6info['decisionmaker'],
                
        ));
         return view('swinvest/thankyou');
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
