@extends('layouts/cssinclude')
<!DOCTYPE html>
<html lang="en">
   
<body>
    <body class="ind-main-bnr">
    <div class="container-fluid">
      <div class="row p-3">
        <div class="col-sm-3 south1">
            <img class="south" src="{{url('img/image 1.png')}}" alt="">
        </div>
        <!-- <div class="col-sm-2"></div> -->
        <div class="col-sm-5 south3">
            <nav class="navbar navbar-expand-sm">
  
                <!-- Links -->
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="#">About Us</a>
                  </li>
                 
                </ul>
              
              </nav>
        </div>
       
        <div class="col-sm-4 button header_button py-3  ">
            <button type="button" class="btn  text-white but bg-primary my-2 float-right buts">Sign up</button>
            <button type="button" class="btn  float-right text-black-50 my-2 but bg-white buts2 mx-3 px-2">Sign In</button>
        </div>
    </div>
           

    </div>
        <section class="ind-main-bnr">
            <div class="container-fluid bg-light h-100">
                <div class="container bg-light  ">
                    <div class="row">
                        <img class="my-3 position-relative" src="img/swog2.png" alt="">
                        <!-- <p class="position-absolute invest"><span class="one">1</span> Select Investment</p> -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-hedaing2">
                                Which of the following best describes the investing entity?
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <p class="para1">
                                Your information will be stored and automatically pre-populated for any future investments
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 swog-form form-describe">
                            <form action="{{url('swog3')}}" method="post">
                                @csrf
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="investingentity" value="Individual">
                                    <label class="form-check-label">
                                        Individual
                                  
                                    </label>
                                          <p>Invest using your legal name and tax information</p>
                                  </div>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="investingentity" value="IRA or Keogh Plan                                    IRA or Keogh Plan
" >
                                    <label class="form-check-label">
                                    IRA or Keogh Plan
                                  

                                    </label>
                                    <p>Invest with a beneficiary with equal ownership</p>
                                  </div>
                                  <div class="form-check disabled">
                                    <input type="radio" class="form-check-input" name="investingentity" value="                                    Limited Liability Company
" >
                                    <label class="form-check-label">
                                    Limited Liability Company
                                    </label>
                                    <p>Invest as a single-member LLC or partnership</p>
                                </div>
                                <div class="form-check disabled">
                                    <input type="radio" class="form-check-input" name="investingentity" value="Trust" >
                                    <label class="form-check-label">
                                        Trust
                                    </label>
                                    <p>Invest as an individual, business or investment trust</p>
                                </div>
                                <div class="form-check disabled">
                                    <input type="radio" class="form-check-input" name="investingentity" value="Corporation" >
                                    <label class="form-check-label">
                                     Corporation
                                    </label>
                                    <p>Invest as a C Corporation or S Corporation</p>
                                </div>
                                <div class="form-check disabled">
                                    <input type="radio" class="form-check-input" name="investingentity" value="Partnership" >
                                    <label class="form-check-label">
                                   Partnership
                                    </label>
                                    <p>Invest as a Partnership</p>
                                </div>
                                <button type="submit" class="btn btn-primary" style="padding: 10px 30px;">Next <i class="fa-solid fa-arrow-right"></i> </button>
                              </form> 
                        </div>
                    </div>
                   
                   
                       
                    
                </div>
                
            </div>
        </section>
        <div class="row bg-light ">
            <div style="padding-top: 10px;" class=" col-md-6 d-flex justify-content-start align-item-center">
                <p class="foot-p1">©2023 SouthWest Opportunity Group.  All rights reserved.</p>
            </div>
            <div style="padding-top: 10px;" class="col-md-6 d-flex justify-content-end align-item-center">
               <p class="foot-p2">©2023 SouthWest Opportunity Group.  All rights reserved.</p>
            </div>
        </div>
    </body>
</html>