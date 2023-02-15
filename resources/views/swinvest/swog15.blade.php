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
                        <img class="my-5 position-relative" src="img/swog2.png" alt="">
                        <!-- <p class="position-absolute invest"><span class="one">1</span> Select Investment</p> -->
                    </div>
                    <div class="row">
                        <div class="col-sm-3 main-box">
                            <p>Current Investment Amount</p>
                            <h4>$100,000</h4>
                        </div>
                        <div class="col-sm-3 main-box">
                            <p>Due Date</p>
                            <h4>02/01/23</h4>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-hedaing2">
                                Wire Transfer Instructions
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <p class="para1">
                                Lorem ipsum dolor sit amet consectetur. Donec sed nunc magna enim tristique. Feugiat faucibus aliquet mi ut ultricies orci. Eget velit lorem in vitae volutpat. Sed tortor tellus id fringilla nam sapien. Tincidunt ipsum bibendum nunc mattis in sit volutpat dolor. Turpis massa imperdiet magnis nunc venenatis cursus ultrices in sed. Tellus cursus velit dignissim magna eget. Nulla at consequat feugiat quis dignissim
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="icon-check">
                            <li>Lorem ipsum dolor sit amet consectetur. Nunc ac commodo ut enim cursus neque hac dignissim arcu.</li>
                            <li>Lorem ipsum dolor sit amet consectetur. Nunc ac commodo ut enim cursus neque hac dignissim arcu.</li>
                            <li>Lorem ipsum dolor sit amet consectetur. Nunc ac commodo ut enim cursus neque hac dignissim arcu.</li>
                            <li>Lorem ipsum dolor sit amet consectetur. Nunc ac commodo ut enim cursus neque hac dignissim arcu.</li>
                            <li>Lorem ipsum dolor sit amet consectetur. Nunc ac commodo ut enim cursus neque hac dignissim arcu.</li>
                            <li>Lorem ipsum dolor sit amet consectetur. Nunc ac commodo ut enim cursus neque hac dignissim arcu.</li>
                            <li>Lorem ipsum dolor sit amet consectetur. Nunc ac commodo ut enim cursus neque hac dignissim arcu.</li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 swog-form">
                            <form action="{{url('swog17')}}" method="post">
                                @csrf
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" value="yes" name="docstatus">
                                    <label style="margin-left: 20px;" class="form-check-label">
                                      I have submitted all the required documents
                                    </label>

                                </div>
                               
                               
                                <div class="row d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary bbtn">Submit</button>
                                </div>
                              </form> 
                        </div>
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