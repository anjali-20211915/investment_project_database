<!-- @extends('layouts.cssinclude') -->
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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/project.css">
      
       
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
                        <button type="button" class="btn  text-white  my-2 float-right buts">Sign up</button>
                        <button type="button" class="btn  float-right text-black-50 my-2 but bg-white buts2 mx-3 px-2"><a href="{{url('loginuser')}}">Sign In</
                    </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="ind-bnr-heading banner-contents">
                            <h1>Which of the following best describes you?</h1>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="two-images-mar-top">
            <div class="container">
                <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="left-image position-relative">
                                <a href="{{url('about')}}">
                                <div class="hov">
                                    
                                </div>
                                </a>
                            <a href="{{url('about')}}"><img class="ban-img" src="{{url('img/Rectangle 5.png')}}" width="540"></a>
                            <i class="fa-sharp fa-solid fa-arrow-right g-arrow"></i>
                                <h3 class="ind">INDIVIDUAL INVESTOR</h3>
                                <p class="ind-2">I would like to invest on behalf of myself, family or my company.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="right-image position-relative">
                                <a href="{{url('finace-advisor?type=1')}}">
                                <div class="hov">
                                    
                                </div>
                                <a href="{{url('about')}}">
                                <a href="{{url('finace-advisor?type=1')}}"><img src="{{url('img/Rectangle 6.png')}}" width="540"></a>
                                <i class="fa-sharp fa-solid fa-arrow-right g-arrow"></i>
                                <h3 class="ind">FINANCIAL ADVISOR</h3>
                                <p class="ind-2">I would like to invest on behalf of clients.</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <section class="sign">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="sign-content">
                            <p>Already have an account? <a href="#">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{url('img/image 1.png')}}" alt="logo">
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