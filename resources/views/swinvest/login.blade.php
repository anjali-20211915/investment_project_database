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
                <form action="{{route('login')}}" class="was-validated" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="email" class="form-control" id="email" placeholder="john@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @if($errors->has('email'))
                         <div class="text-danger">{{ $errors->first('email') }}
                         </div>
            @endif

                               
                              </div>
                        </div>


<!-- 

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->




<!-- 
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
                        </div> -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="uname">password:</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                placeholder="Enter your paswword">
                                 <i class="fa-solid fa-eye iconn-img"></i> 
                                 @if($errors->has('password'))
            <div class="text-danger">{{ $errors->first('password') }}</div>
            @endif
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