@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Number') }}</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="phoneno" value="{{ old('phoneno') }}">

                                @error('phoneno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




<!DOCTYPE html>
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
                    <button type="button" class="btn  text-white but my-2 float-right buts">Sign up</button>
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
               <div class="col-sm-12 main-form2">
                <form action="{{url('investor')}}" class="was-validated">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="uname">First Name:</label>
                                <input type="email"  class="form-control" id="uname" placeholder="John">
                               
                              </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="uname">Last Name:</label>
                                
                                    
                                <input type="text" class="form-control" placeholder="Enter your last name" name="email">

                              </div>
                        </div>
                       
                   
                    </div>
                    <div class="row py-4">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="uname">Date Of Birth</label>
                                <input type="date"  class="form-control" id="uname" placeholder="John">
                               
                              </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- <div class="input-group"> -->
                                
                                <!-- <div class="input-group-prepend">
                                 
                                  <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa-solid fa-flag-usa"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                
                                  </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Username">
                              </div> -->
                            <div class="form-group">
                                <label for="uname">Phone Number</label>
                                
                                    
                                <input type="text" class="form-control" placeholder="+1" name="email">

                              </div>
                        </div>

                    </div>
                        <div class="row py-4">
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label for="comment">Address:</label>
                                    <textarea class="form-control" rows="3" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button style="margin-top: 80px;" type="submit" class="btn btn-primary float-right">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
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