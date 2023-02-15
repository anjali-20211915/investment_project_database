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
               <div class="col-sm-12 main-form2">
                <form action="{{url('step2fa')}}" class="was-validated" method="post">
                    @csrf
                    <!-- //afilate -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="sel1">What is your role?</label>
                                <select id="sel1" name="role" class="form-control @error('role') is-invalid @enderror" required>
                                    <option>Advisor</option>
                                    <option>Analyst</option>
                                    <option>Client Services</option>
                                    <option>Other</option>
                                </select>
                                @error('role')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
         
</div>
                        </div>
                        
                    </div>
                    <div class="row">
                     <div class="col-sm-6 main-cdr">
                        <h6 class="m-2 cdr">What is your CDR number?</h6>
                        <p class="your_name">If you don’t have this numebr, you can easily locate it at BrokerCheck by
                            typing in your name.</p>
                            <input type="number" name="usercdrno" class="form-control @error('usercdrno') is-invalid @enderror" required >
                                                   @error('usercdrno')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                            <h6 class="my-2 cdr">What is your firm’s CDR number?</h6>
                            <p class="your_name">If you don’t have this numebr, you can easily locate it at <a href="" class="und"> BrokerCheck </a> by
                                typing in your name.</p>
                                <input type="number" name="firmcdrno" class="form-control @error('firmcdrno') is-invalid @enderror" required> 
                                @error('firmcdrno')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                     </div>
                      
                    </div>
                        <div class="row">
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