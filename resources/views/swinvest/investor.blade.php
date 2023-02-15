@extends('layouts/cssinclude')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/project.css">
      
       
    </head>
    <body>
        <header>
         
        </header>
        <section class="ind-main-bnr">
            <nav class="navbar navbar-expand-sm">
              <div class="container-fluid">
                <!-- <div class="row w-100 p-3"> -->
                  <div class="col-xs-12 col-sm-3 south1 position-relative">
                    <img class="south" src="image 1.png" alt="">
                    <button class="navbar-toggler respo-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                      <i class="fa-solid fa-bars navbar-toggler-icon"></i>
                      
                    </button>
                  </div>
                 
                  <div class="col-sm-5 south3">
                    <div class="collapse navbar-collapse menu-navbar" id="collapsibleNavbar">
                      <div class="row">
                        <div class="col-xs-12 ">
                          <ul class="navbar-nav  ">
                            <li class="nav-item">
                              <a class="nav-link text-white p-4 text-menu" href="#">Products</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-white p-4 text-menu " href="#">About Us</a>
                            </li>
                          
                          </ul>
                        </div>
                        <div class="col-xs-12 d-sm-none  button header_button py-3  ">
                          <button type="button" class="btn  text-white  my-2 float-right buts">Sign up</button>
                          <button type="button" class="btn  float-right text-black-50 my-2 but bg-white buts2 mx-3 px-2">Sign In</button>
                        </div>
                      </div>
                      
                     
                    </div>
                  </div>
                  <div class="col-sm-4 d-none d-sm-block button header_button py-3  ">
                    <button type="button" class="btn  text-white  my-2 float-right buts">Sign up</button>
                    <button type="button" class="btn  float-right text-black-50 my-2 but bg-white buts2 mx-3 px-2">Sign In</button>
                  </div>
                </div>
              </div>
            </nav>
          </section>
                  
       
       <section class="pt-5">
            <div class="container">
                
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                        <div class="page-heading">
                        <h2>Are you an accredited investor?</h2>
                    </div>
                    <div class="page-cont">
                       <p>As a regulated investment platform, we are required to learn more about you before creating your account.</p>
                       <p>Generally, you are an accredited investor if any of the following are true:</p>
                       <ul>
                        <li><img src="img/inv.png" width="30" height="30" alt=""> Annual income greater than $200k (for the last 2 years)</li> 
                        <li><img src="img/inv.png" width="30" height="30" alt=""> Joint household income greater than $300k (for the last 2 years)</li>
                        <li><img src="img/inv.png" width="30" height="30" alt=""> Net worth greater than $1M (excluding your primary residence)</li>
                       </ul>
                    </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-sm-6 invest-res-btn">
                        <button type="button" class="btn btn-outline-primary yes-btn">Yes</button>
                        <button type="button" class="btn no-btn mx-5 btn-outline-primary">No</button>
                    </div>
                    <div class="col-sm-6">
                        <a href="agreement.html" class="btn no-btn float-right mx-5 btn-outline-primary nxt-btn">Next</a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="img/image 1.png" alt="logo">
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-md-12 text-center footer-call">
                        <p>Call us at:<a href="tel:602 277 7368"> 602-277-7368</a></p>
                    </div>

                <div class="footer-btm-line"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="menu-footer text-center">
                            <ul>
                                <li>Why SWOG</li>
                                <li>Our Team</li>
                                <li>Strategic Partners</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="menu-footer text-center">
                            <ul>
                                <li>SFR Portfolio Funds</li>
                                <li>AZ Fund IV</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="menu-footer text-center">
                            <ul>
                                <li>Individual</li>
                                <li>Institution</li>
                                <li>Advisors</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="menu-footer text-center">
                            <ul>
                                <li>Blogs</li>
                                <li>Whitepaper</li>
                                <li>Track Record</li>
                                <li>Events & Webinars</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer> 
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