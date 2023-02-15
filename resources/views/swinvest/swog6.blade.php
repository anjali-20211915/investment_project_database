<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{url('style.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{url('project.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    </head>
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
                                Investor Suitability
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <p class="para1">
                                Please affirm the following statements to help us to verify your understanding and ability to bear the potential risks of the investment.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 swog-form my-form2">
                        <form action="{{url('swog7')}}" method="post" >
                                @csrf                             
                                <div class="row">
                                    <div class="form-check">
                                        <input style="margin:0!important" checked type="checkbox" class="form-check-input" name="investorsuitability" value="Click on this checkbox to select all or individually select each below.">
                                        <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                            Click on this checkbox to select all or individually select each below.
                                        </label>
    
                                    </div>
                                 
                                </div>
                                <div class="row">
                                  
                                    <div class="col-sm-11">
                                        <div class="form-check">
                                            <input style="margin:0!important" type="checkbox" class="form-check-input" name="investorsuitability" value="I am able to bear the economic risk of the proposed investment.">
                                            <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                                I am able to bear the economic risk of the proposed investment.
                                            </label>
        
                                        </div>
                                        <div class="form-check">
                                            <input style="margin:0!important" type="checkbox" class="form-check-input" name="investorsuitability" name="investorsuitability" value="Click on this checkbox to select all or individually select each below."">
                                            <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                                I have previously made an investment in a private investment fund in which the investment manager(s) was/were entitles to compensation based on the funds, investment performance.
                                            </label>
        
                                        </div>
                                   
                                        <div class="form-check">
                                            <input style="margin:0!important" type="checkbox" class="form-check-input" name="investorsuitability" value=" I have sufficient knowledge and experience in financial and business matters as to be capable of evaluating the merits and risks associated with the investment.">
                                            <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                                I have sufficient knowledge and experience in financial and business matters as to be capable of evaluating the merits and risks associated with the investment.
                                            </label>
        
                                        </div>
                                    </div>
                                </div>
                           
                                    <div class="row my-3">
                                       
                                        <div class="col-sm-3">
                                            <button style="padding: 10px 30px;" type="submit" class="btn my-5 btn-primary">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                 
                                   
                               
                             
                              
                                   
                                   
                                
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