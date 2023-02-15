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
        <section class="ind-main-bnr" style="height: 83vh;">
            <div class="container-fluid bg-light h-100">
                <div class="container bg-light  ">
                    <div class="row">
                        <img class="my-3 position-relative" src="{{url('img/swog1.png')}}" alt="">
                        <p class="position-absolute invest"><span class="one">1</span> Select Investment</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-hedaing2">
                                How much would you like to invest in SWOG?
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <p class="para1">
                                Enter your allocation request below to indicate your interest in this opportunity. Any final commitment is subject to your review of final offering documents, completion of your 
                                subscription agreement and acceptance by SWOG.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 swog-form">
                            <form action="{{url('swog2')}}" method="post">
                                @csrf
                                <div class="form-group">
                                  <label for="email">Enter Amount:</label>
                                  <input type="number" class="form-control" name="amount" required>
                                </div>
                               
                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form> 
                        </div>
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