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
        <section class="ind-main-bnr" style="height: 83vh;">
            <div class="container-fluid bg-light h-100">
                <div class="container bg-light  ">
                    <div class="row p-5">
                        <div class="col-12">
                            <h3 class="accro">
                                Accreditation Verification
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <p class="para1">
                             To complete your investment, please submit the following documents to verify your investment entity. <span class="chose"> Choose the document type.</span>
                            </p>
                        </div>
                    </div>
                    <div class="row ">
                        <form action="{{url('welcome-main')}}" class="was-validated main-form3">
                          
                           <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group mb-3 check-in">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <input checked id="takenBefore" type="checkbox" aria-label="Checkbox for following text input">
                                          </div>
                                        </div>
                                        <input type="text" value="third party" name="documenttype" readonly value="Third Party Verification" class="form-control" aria-label="Text input with checkbox">
                                      </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="input-group mb-3 check-in">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">
                                          <input id="takenBefore2"  type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                      </div>
                                      <input type="text" readonly value="Proof of income" value="proofofincome" name="documenttype" class="form-control" aria-label="Text input with checkbox">
                                    </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group mb-3 check-in">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <input id="takenBefore3" type="checkbox" name="documenttype" value="professional" aria-label="Checkbox for following text input">
                                      </div>
                                    </div>
                                    <input type="text" readonly value="Professional License" class="form-control" aria-label="Text input with checkbox">
                                  </div>
                            </div>
                               
                               
                            </div>   
                            <div class="checker1">
                              <div class="row">
                                  <h4>
                                  Instructions
                                  </h4>
                                  <ul class="instrucu">
                                  <li>
                                      If you work with a third party advisor (tax preparer, financial advisor, attorney, accountant , etc.) they can attest to your status as  an Accredited Investor by singing the letter attached below.
                                  </li>
                                  <li>
                                      <a class="btn btn-dark my-4" href="#">DOWNLOAD TEMPLATE</a>
                                  </li>
                                  <li>
                                      Alternatively, you can use am accreditation verification like ParallelMarkets, Verifyinvestor or InvestReasy and upload the letter they provide.
                                  </li>
                                  
                                  </ul>
                              </div>
                              <div class="row ">
                                  <div class="col-sm-9 my-1 tax">
                                  <i class="fa-solid fa-cloud-arrow-up"></i>
                                  <h4>Upload Third Party Verification Letter</h4>
                                  <p>Lorem Ipsum is Lorem Ipsum is simply dummy text
                                      of the printing and type setting industry.</p>
                                      <input type="file" name="document1">

                                  </div>
                                  <div class="col-sm-3 "></div>
                                  <div class="col-sm-6 my-5 ">
                                     <button type="submit" class="btn btn-primary float-left">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                                  
                                  </div>
                              </div>
                          </div>
                         
                          <div class="checker2">
                              <div class="row">
                                  <h4>
                                    Instructions
                                  </h4>
                                  <ul class="instrucu">
                                    <li>
                                      Upload tax documents that show your income meets the required threshold ($200k for individual income, $300k in joint income with your spouse) for the last two years.
                                    </li>
                                    <li>
                                      Acceptable documents include W-2s, K-1s, 1099, or signed IRS Form 1040
                                    </li>
                                  </ul>
                                </div>
                                <div class="row">
                                  <div class="form3">
                                      <div class="form-group">
                                        <label style="font-weight: 700;" for="usr">What is your current annual income in $USD?:</label>
                                        <input type="text" class="form-control" id="usr" name="currentincome" requird>
                                      </div>
                                     
                                      <div class="checkbox">
                                        <h4 class="doc">Upload Documents</h4>
                                        <label><input type="checkbox" value="" class="mx-4">I have not filed 2022 tax documents</label>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-9 tax">
                                          <i class="fa-solid fa-cloud-arrow-up"></i>
                                          <h4>2022 Tax Documents</h4>
                                          <p>Lorem Ipsum is Lorem Ipsum is simply dummy text <br>
                                            of the printing and type setting industry.</p>
                                            <input type="file" name="document1" required>

                                        </div>
                                        <div class="col-sm-3"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-9 tax">
                                          <i class="fa-solid fa-cloud-arrow-up"></i>
                                          <h4>2021 Tax Documents</h4>
                                          <p>Lorem Ipsum is Lorem Ipsum is simply dummy text
                                            of the printing and type setting industry.</p>
                                            <input type="file" name="document2" required>

                                        </div>
                                        <div class="col-sm-3"></div>
                                      </div>
                                      <div class="col-sm-6 my-5 ">
                                        <button type="submit" class="btn btn-primary float-left">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                                       
                                    </div>
                                      
                                  </div>
                                </div>
                          </div>
                          <div class="checker3">
                            <h4>
                              Instructions
                            </h4>
                            <div class="row">
                               
                                <ul class="instrucu">
                                  <li>
                                    You qualify as an Accredited Investor if you have one of the following financial services licenses. Series 7, Series 65, Series 82
                                  </li>
                                  <li>
                                    Your license must be active and in good standing
                                  </li>
                                  
                                </ul>
                            </div>
                            <div class="row">
                              <div class="col-sm-9 my-1 tax">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <h4>Upload Professional License</h4>
                                <p>Lorem Ipsum is Lorem Ipsum is simply dummy text
                                  of the printing and type setting industry.</p>
                                  <input type="file" name="document1">

                                </div>
                              <div class="col-sm-3"></div>
                            </div>
                            <div class="col-sm-6 my-5 ">
                                <button type="submit" class="btn btn-primary float-left">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                                
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
        <script>
            
//             checkBox = document.getElementById('takenBefore').addEventListener('click', event => {
// 	if(event.target.checked) {
//         const collection = document.getElementsById("checker").style.background="red";
//         // collection.style.border = "red";
//         alert(1);
// 	}
// });
$("input[type='checkbox']").change(function(){
  
    if($('#takenBefore').is(":checked")){
        $("#takenBefore2").attr("checked", false);
        $("#takenBefore3").attr("checked", false);
  
            $(".checker1").css("display", "block");
             $(".checker2").css("display", "none");
            $(".checker3").css("display", "none");  
    }
   
});
$("input[type='checkbox']").change(function(){
  
    if($('#takenBefore2').is(":checked")){
        $("#takenBefore").attr("checked", false);
        $("#takenBefore3").attr("checked", false);
  
  $(".checker2").css("display", "block");
   $(".checker1").css("display", "none");
  $(".checker3").css("display", "none");  
}
   
});
$("input[type='checkbox']").change(function(){
    if($('#takenBefore3').is(":checked")){
        $("#takenBefore2").attr("checked", false);
        $("#takenBefore").attr("checked", false);
  
  $(".checker3").css("display", "block");
   $(".checker2").css("display", "none");
  $(".checker1").css("display", "none");  
}
   
});
          
        </script>
    </body>
</html>