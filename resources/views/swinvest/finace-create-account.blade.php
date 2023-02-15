@extends('layouts/cssinclude')
<html lang="en">
 
    <body>
    <section class="ind-main-bnr">
          
        <div class="container-fluid ">
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
                    <button type="button" class="btn  text-white but  my-2 float-right buts">Sign up</button>
                    <button type="button" class="btn  float-right text-black-50 my-2 but bg-white buts2 mx-3 px-2">Sign In</button>
                </div>
            </div>
          
          
          </div>
    </section>
        <div class="container-fluid ">
            <div class="container  main">
              <div class="row">
                <div class="col-sm-12">
                    <h1 class="main-hedaing">Create Your Account</h1>
                </div>
              </div>
              <div class="row">
               <div class="col-sm-12 main-form2 main-form-main">
                <form action="{{url('step4fa?type=financial')}}" class="was-validated" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="uname">Email Address:</label>
                                <input type="email" class="form-control" id="uname" placeholder="john@gmail.com" name="email" required>
                               
                              </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="uname">password:</label>
                                
                                    
                                <input type="password" class="form-control" placeholder="Enter your paswword" name="password" required>
                                
                                 <i class="fa-solid fa-eye iconn-img"></i>  
                               
                               
        
                              </div>
                        </div>
                       
                   
                    </div>
                    <div class="row">
                        <div class="col-sm-12 my-5">
                            <p class="lorem">
                                Lorem ipsum dolor sit amet consectetur. Consectetur mauris in dis quisque aliquam tempus elit. Lorem ipsum dolor sit amet consectetur. Consectetur mauris in dis quisque aliquam tempus elit.0
                            </p>
                          
                        </div>
                    </div>
                    <div class="row foot-btn ">
                        <div class="col-sm-6 float-left">
                            
                                <a href="#">Already have an account? Sign in</a>
                           
                        </div>
                        <div class="col-sm-6 ">
                            <button type="submit" class="btn btn-primary float-right">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                           
                        </div>
                    </div>
                    
                  </form>
                  
               </div>
            </div>
            </div>
        </div>
    
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