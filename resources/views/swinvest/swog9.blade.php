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
        <link rel="stylesheet" type="text/css" href="{{url('project.css')}}">        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
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
                                Legal Information Summary
                            </h3>
                            <h6 class="">
                                Please review the information below and make any necessary corrections. Press Next at the bottom of page to review and sign your investment documents.  
                            </h6>
                           
                        </div>
                    </div>
                    <div class="row looks-good">
                        <div class="col-sm-1"> <img src="img/check.png" alt=""></div>
                        <div class="col-sm-9">
                            <p>Hi Joe, your information looks good!</p>
                            <p>Please  be sure to keep your information up to date if anything changes.</p>
                        </div>
                    </div>

                    
                   
                    
                    <div class="row">
                        <div class="col-sm-10 swog-form my-form-big">
                        <form action="{{url('swog10')}}" method="post">
                             @csrf
                                <div class="row main-big-form1">
                                    <div class="col-sm-10">
                                        <h4>Personal Information</h4>
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <div class="row ">
                                            <div class="col-sm-11">
                                                <div class="form-group check-border">
                                                    <label for="email">Email address:</label>
                                                    <input type="text" class="form-control" value="Jonathan Doe" id="email">
                                                  </div>
                                                  <hr> 

                                            </div>
                                            <div  class="col-sm-1 d-flex align-items-center">
                                                <i class="fa-solid fa-pen"></i>
                                                <a class="" href="">Edit</a>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row ">
                                            <div class="col-sm-11">
                                                <div class="form-group check-border">
                                                    <label for="email">Citizenship:</label>
                                                    <input type="text" class="form-control" value="United States of America" id="email">
                                                  </div>
                                                  <hr>
                                            </div>
                                            <div  class="col-sm-1 d-flex align-items-center">
                                                <i class="fa-solid fa-pen"></i>
                                                <a class="" href="">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row ">
                                            <div class="col-sm-11">
                                                <div class="form-group check-border">
                                                    <label for="email">Date of Birth:</label>
                                                    <input type="text" class="form-control" value="February 11, 1998" id="email">
                                                  </div>
                                                  <hr>
                                            </div>
                                            <div  class="col-sm-1 d-flex align-items-center">
                                                <i class="fa-solid fa-pen"></i>
                                                <a class="" href="">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row ">
                                            <div class="col-sm-11">
                                                <div class="form-group check-border">
                                                    <label for="email">Tax ID:</label>
                                                    <input type="text" class="form-control" value="*****78" id="email">
                                                  </div>
                                                  <hr>
                                            </div>
                                            <div  class="col-sm-1 d-flex align-items-center">
                                                <i class="fa-solid fa-pen"></i>
                                                <a class="" href="">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row ">
                                            <div class="col-sm-11">
                                                <div class="form-group check-border">
                                                    <label for="email">Phone Number</label>
                                                    <input type="text" class="form-control" value="+1 704-302-8976
                                                    " id="email">
                                                  </div>
                                                  <hr>
                                            </div>
                                            <div  class="col-sm-1 d-flex align-items-center">
                                                <i class="fa-solid fa-pen"></i>
                                                <a class="" href="">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row main-big-form2">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6 float-left">
                                                <h4>Personal Information</h4>
                                            </div>
                                            <div  class="col-sm-6 d-flex justify-content-end align-items-center">
                                                <i class="fa-solid fa-pen"></i>
                                                <a class="" href="">Edit</a>
                                            </div>
                                        </div>
                                        <div class="row check-border">
                                            <div class="col-sm-12">
                                                <p class="pro1">Primary Address</p><br>
                                                <p class="pro2">101 West Ide B, Wells Drive <br>
                                                    Chicago, Illinois 60805</p>
                                                    <hr>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="pro1">Primary Address</p><br>
                                                <p class="pro2">101 West Ide B, Wells Drive <br>
                                                    Chicago, Illinois 60805</p>
                                                    
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="row main-big-form2">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6 float-left">
                                                <h4>Nature of Investment</h4>
                                            </div>
                                            <div  class="col-sm-6 d-flex justify-content-end align-items-center">
                                                <i class="fa-solid fa-pen"></i>
                                                <a class="" href="">Edit</a>
                                            </div>
                                        </div>
                                        
                                        <div class="row check-border">
                                            <div class="col-sm-12">
                                                <p class="pro1">Is the Subscriber subscribing for the interests with the intent to sell, distribute or transfer the interests to 
                                                    any other person or persons?</p><br>
                                                <p class="pro2">NO</p>
                                                    <hr>
                                            </div>
                                            
                                            <div class="col-sm-12">
                                                <p class="pro1">Will any other person or persons have a beneficial interest in the Interest acquired?</p><br>
                                                <p class="pro2">No</p>
                                                <hr>       
                                            </div>
                                         
                                            <div class="col-sm-12">
                                                <p class="pro1">Is the Subscriber subscribing for the interests as agent, nominee, trustee, partner or otherwise on behalf of,
                                                    for the account of, or jointly with any other person or entity?</p><br>
                                                <p class="pro2">No</p>
                                                <hr>
                                                    
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="pro1">Does the Subscriber control, or is the Subscriber controlled by or under common control with, any other
                                                    existing or prospective investor in the Partnership?</p><br>
                                                <p class="pro2">No</p>
                                                
                                                    
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="row main-big-form2">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6 float-left">
                                                <h4>Investor Suitability</h4>
                                            </div>
                                            <div  class="col-sm-6 d-flex justify-content-end align-items-center">
                                                <i class="fa-solid fa-pen"></i>
                                                <a class="" href="">Edit</a>
                                            </div>
                                        </div>
                                        <div class="row check-border">
                                            <div class="col-sm-12">
                                                <p class="pro1">Is the Subscriber able to bear the economics risk of the proposed investment in the Partnership?</p><br>
                                                <p class="pro2">NO</p>
                                                    <hr>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="pro1">Has the Subscriber previously made an investment in a private investment fund in which the investment
                                                    manager(s) were entitles to compensation based on the fund’s investment performance?</p><br>
                                                <p class="pro2">No</p>
                                                <hr>
                                                    
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="pro1">Does the Subscriber have sufficient knowledge and experience in financial and business matters to as to be
                                                    capable of evaluating the merits and risks associated with investing in Partnership?</p><br>
                                                <p class="pro2">No</p>
                                                    
                                            </div>
                                         
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="row main-big-form2">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6 float-left">
                                                <h4>Accreditation Status</h4>
                                            </div>
                                            <div  class="col-sm-6 d-flex justify-content-end align-items-center">
                                                <i class="fa-solid fa-pen"></i>
                                                <a class="" href="">Edit</a>
                                            </div>
                                        </div>
                                        <div class="row check-border">
                                            <div class="col-sm-12">
                                                <p class="pro1">Accredited Investor</p><br>
                                                <p class="pro2">YES</p>
                                                    <hr>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="pro1">Qualified Purchaser</p><br>
                                                <p class="pro2">No</p>
                                                    
                                            </div>
                                       
                                         
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="row main-big-form2">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6 float-left">
                                                <h4>Tax Election</h4>
                                            </div>
                                            <div  class="col-sm-6 d-flex justify-content-end align-items-center">
                                                <i class="fa-solid fa-pen"></i>
                                                <a class="" href="">Edit</a>
                                            </div>
                                        </div>
                                        <div class="row check-border">
                                            <div class="col-sm-12">
                                                <p class="pro1">Tax Election</p><br>
                                                <p class="pro2">YES</p>
                                                    
                                            </div>
                                          
                                       
                                         
                                         
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