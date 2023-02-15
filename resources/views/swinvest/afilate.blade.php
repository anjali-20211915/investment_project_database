@extends('layouts.cssinclude')

<!DOCTYPE html>
<html lang="en">
   
    <body>
    <section class="ind-main-bnr">
          
        <div class="container">
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
    </section>
        <div class="container-fluid ">
            <div class="container  main">
              <div class="row">
                <div class="col-sm-12">
                    <h1 class="main-hedaing">Which firm are you affiliated with?</h1>
                </div>
              </div>
              <div class="row">
               <div class="col-sm-12 main-form2">
                <form action="{{url('step3fa')}}" class="was-validated" method="post">
                    @csrf
                    <div class="row my-3">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="uname">Firm Email Address</label>
                                <input type="email"  class="form-control @error('firmmail') is-invalid @enderror" id="uname" name="firmmail" placeholder="john@gmail.com" required >
                                @error('firmmail')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                              </div>
                        </div>
                        <div class="col-sm-5">
                             <div class="form-group">
                                <label for="uname">Firm Url:</label>
                                
                                    
                                <input type="text" class="form-control @error('firmurl') is-invalid @enderror" name="firmurl" placeholder="Enter your last name" name="Enter your paswword" required>
                                @error('firmurl')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                              </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="sel1">Firm Type</label>
                                <select class="form-control @error('firmtype') is-invalid @enderror" id="sel1" name="firmtype" required>
                                    <option>Family Office</option>
                                    <option>RIA</option>
                                    <option>Broker Dealer</option>
                                    <option></option>
                                    @error('firmtype')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                </select>
                            </div>
            
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn my-5 btn-primary float-right">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
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