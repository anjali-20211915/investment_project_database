@extends('layouts/cssinclude')
<!DOCTYPE html>
<html lang="en">
   
<body>
    <body class="ind-main-bnr">
    <div class="container-fluid " style="margin:10px;">
      <div class="row p-3">
        <div class="col-sm-3 south1">
            <img class="south" src="{{url('img/image 1.png')}}" alt="">
        </div>
        <!-- <div class="col-sm-2"></div> -->
        <div class="col-sm-5 south3">
            <nav class="navbar navbar-expand-md">
  
                <!-- Links -->
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="#">Swog_Details</a>
                  </li>
                 
                  <li class="nav-item">
                    <a class="nav-link text-white " href="#">Transaction_Details</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link text-white " href="#">Investment_details</a>
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
              <div class="container bg-light">
                <div class="row p-5">
                  <div class="col-12">
              @yield('table')
                  </div></div></div>
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