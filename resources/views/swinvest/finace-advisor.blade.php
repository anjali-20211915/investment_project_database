@extends('layouts.cssinclude')
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{url('style.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{url('project.css')}}">

    </head>
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
        <div class="container-fluid ">
            <div class="container  main">
              <div class="row">
                <div class="col-sm-12">
                    <h1 class="main-hedaing">Tell us more about yourself</h1>
                </div>
              </div>
              <div class="row">
               <div class="col-sm-12 main-form2 main-form -input-hg">
                <form action="{{url('step1fa')}}" method="post">
                    @csrf
                    <div class="row my-3">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="my-3" for="uname">First Name:</label>
                                <input type="text"   class="form-control @error('firstname') is-invalid @enderror" id="uname" placeholder="John" name="firstname">
                                @error('firstname')
                             <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                              </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="my-3" for="uname">Last Name:</label>
                                
                                    
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror"  placeholder="Enter your last name" name="lastname">
                                @error('lastname')
    <div class="alert alert-danger">{{ $message }}</div>

    @enderror
                              </div>
                        </div>
                       
                   
                     </div>
                    <div class="row my-3">
                        
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="my-2" for="uname">Phone Number</label>
                                
                                    
                                <input type="text" class="form-control @error('phoneno') is-invalid @enderror" placeholder="+1" name="phoneno">
                                @error('phoneno')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                              </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="my-2" for="uname">Phone Extention</label>
                                <input type="text"   class="form-control @error('phoneex') is-invalid @enderror" id="uname" placeholder="Enter your phone extention" name="phoneex">
             
                                @error('phoneex')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

                              </div>
                        </div> 
                    </div> 
                    <div class="row my-3">
                        <div class="col-sm-4">
                            <div class="form-group">
  <label class="my-2" for="sel1">Country of Operation:</label>
  <select  id="sel1" name="country" class="form-control @error('country') is-invalid @enderror">
  
    <option>United States of America</option>
    
    <!-- <option>2</option>
    <option>3</option>
    <option>4</option> -->
  </select>
  @error('country')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
  <label class="my-2" for="sel1">State of Operation:</label>
  <select  id="sel1" name="stateofop" class="form-control @error('stateofop') is-invalid @enderror">
  @error('stateofop')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <option>Enter your phone extention</option>
    <!-- <option>2</option>
    <option>3</option>
    <option>4</option> -->
  </select>
</div>
                        </div>
                    </div>
                        <div class="row my-3">
                            <div class="col-sm-9">
                                
                            </div>
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