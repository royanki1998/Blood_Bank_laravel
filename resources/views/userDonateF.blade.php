<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Donation Form Female</title>
    <style>
        .form-label{
            color: white;
            font-size: 15px;
        }
    </style>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"/>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="bg-dark">
    <div class="main-wrapper">

      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>

      <div class="page-breadcrumb bg-dark">
          <div class="row">
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb" style="font-size:13px;">
                    <li class="breadcrumb-item"><a href="/userProfile">My Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Donation Form
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
        </div>

      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center">


        <div class="auth-box">
            <div>
                <div class="text-center text-white py-4 mb-4">
                    <h2>Donation Form [Female]</h2>
                    <p class="text-danger">Note: Provide the correct information according to your valid ID proofs 
                        which will be verified at the donation center, at the fullfillment of which only you will 
                         be allowed to donate
                    </p>
                </div>

                <!-- Form -->
                <form class="form-horizontal mt-3 px-4" action="/donationFormSubmitF" method="POST">
                    @csrf
                    <div class="row pb-4 px-2">
                        <div class="col-12">
                            <!-- <div class="mb-4" style="width:500px;">
                                <label name=for="adhaar" class="form-label">Enter Donor's registered adhaar number</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Adhaar number"
                                    aria-label="adhaar"
                                    aria-describedby="basic-addon1"
                                    required/>
                            </div> -->
                            <div class="mb-4">
                                <label for="donation" class="form-label">Are you a childbearing women ?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r1" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r1" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Are you a breastfeeding mother ? </label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r2" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r2" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Did you had any child birth in past 1 year ? </label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r3" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r3" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            </div>

                            <div class="mb-4">
                                <label for="donation" class="form-label">Have the donor donated blood in the last three months? </label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r4" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r4" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Had any alcoholic beverages in 24 hours ?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r5" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r5" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Have the donor had dental work or taken Aspirin in 72 hours?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r6" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r6" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Suffering from cough, influenza or sore throat, common cold ?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r7" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r7" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Have the donor had any antibiotics or any other medications (Allopathic or Ayurveda or Sidha or Homeo) in last 48 hours ?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r8" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r8" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Was the donor treated for Rabies or received Hepatitis B immune globulin in past one year ? </label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r9" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r9" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Have the donor been treated for Malaria in past three months?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r10" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r10" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Have the donor had any immunizations in recent one month ?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r11" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r11" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">if you had tattoo, ear or skin piercing or acupuncture, received blood or blood products, serious illness or major surgery, contact with a person with hepatitis or yellow jaundice in past six months ?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r12" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r12" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Is the donor a Diabetes patient or suffering from chest pain, heart disease or high BP,?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r13" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r13" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Does the donor has cancer, blood clotting problem or blood disease, unexplained fever, weight loss, fatigue, 
                                    night sweats, enlarged lymph nodes in armpits, neck or groin, white patches in the mouth etc. ?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r14" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r14" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            
                            </div>
                            <div class="mb-4">
                                <label for="donation" class="form-label">Have the donor ever had TB, bronchial asthma or allergic disorder, 
                                    liver disease, kidney disease, fits or fainting, blue or purple spots on the skin or mucous membranes, 
                                    received human pituitary - growth hormones etc . ?</label>
                                <div class="mx-4">
                                    <input class="form-input" type="radio" name="r15" id="donatedYes" value="yes">
                                    <label class="form-label">Yes</label> &nbsp;   
                                    <input class="form-input" type="radio" name="r15" id="donatedNo" value="no">
                                    <label class="form-label">No</label>    
                                </div>                            
                            
                            </div>
                        </div>
                    </div>
                    <div class=" border-top border-secondary py-2">
                            <div class="pt-3 d-flex justify-content-center">
                                <button
                                    style="width:500px;"
                                    class="btn btn-block btn-lg btn-info"
                                    type="submit">
                                    Submit
                                </button>
                            </div>
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </div>
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
      $(".preloader").fadeOut();
    </script>
  </body>
</html>
