@extends('layouts/cssinclude')
<!DOCTYPE html>
<html lang="en">
   
<body>
 
     
      

  <section class="ind-main-bnr">
          
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
</section>

        
    <div class="container-fluid bg-light">
      <div class="container bg-light lastt">
        <div class="row p-2">
          <div class="col-sm-2">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" style="width:100%">
               
              </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" style="width:100%">
                <span class="sr-only">70% Complete</span>
              </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" style="width:100%">
                <span class="sr-only">70% Complete</span>
              </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" style="width:100%">
                <span class="sr-only">70% Complete</span>
              </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" style="width:0%">
                <span class="sr-only">70% Complete</span>
              </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" style="width:0%">
                <span class="sr-only">70% Complete</span>
              </div>
            </div>
          </div>
        </div>  
        
        <div class="row">
            <div class="col-sm-12">
                <h3 class="main-hedaing2" style="font-size: 30px;">
                    What is your desired investment horizon for real estate investments?
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="para1">
                  Select all that apply</span>
                </p>
            </div>
        </div>
        <div class="row ">
            <form action="{{url('goal5')}}" class="was-validated main-form3" method="post">
              @csrf
              <div class="row">
                <div class="col-sm-3">
                    <div class="input-group mb-3 check-in">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input  type="checkbox" aria-label="Checkbox for following text input" name="desiredinvtime" value="Less than 1 year">
                          </div>
                        </div>
                        <input type="text" readonly value="Less than 1 year" class="form-control" aria-label="Text input with checkbox">
                      </div>
                </div>
                <div class="col-sm-3">
                  <div class="input-group mb-3 check-in">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="checkbox" aria-label="Checkbox for following text input" name="desiredinvtime" value=" 1-3 year">
                        </div>
                      </div>
                      <input type="text" readonly value="1-3 years" class="form-control" aria-label="Text input with checkbox">
                    </div>
                </div>
                <div class="col-sm-3">
                  <div class="input-group mb-3 check-in">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input" name="desiredinvtime" value="4-7 year">
                      </div>
                    </div>
                    <input type="text" readonly value="4-7 years" class="form-control" aria-label="Text input with checkbox">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="input-group mb-3 check-in">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input" name="desiredinvtime" value="8 years or more">
                      </div>
                    </div>
                    <input type="text" readonly value="8 years or more" class="form-control" aria-label="Text input with checkbox">
                  </div>
                </div>
                
                
              </div> 
             
              <div class="col-sm-9">
                <div class="form-group">
                
                  
                  <button style="margin-top: 270px!important;" type="submit" class="btn btn-primary my-5">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
              </div>
              
              </div> 
              
                
                  
                  
                
              
              
                
            </form>

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