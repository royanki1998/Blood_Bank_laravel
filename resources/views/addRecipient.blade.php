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
    <title>Add Recipient Details</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
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
                  <ol class="breadcrumb" style="font-size:14px;">
                    <li class="breadcrumb-item"><a href="/index">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Add Recipient Details
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
          align-items-center
          bg-dark
        "
      >


        <div class="auth-box bg-dark border-top border-secondary">
        @if(Session::has('recipientAdded'))
            <div class="alert alert-success">{{Session::get('recipientAdded')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            <div>
                <div class="text-center text-white py-4">
                    <h2>Add Recipient Details</h2>
                    <p>Details must match any valid ID proof of the recipient(Adhaar, Voter ID, Pasport, etc)</p>
                </div>

                <!-- Form -->
                <form class="form-horizontal mt-3" action="/addRecipient" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row pb-4">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text bg-success text-white h-100"
                                                    id="recipientadhaar"
                                                    ><i class="mdi mdi-newspaper fs-6"></i
                                                ></span>
                                            </div>
                                            <input
                                            name="adhaar_no"
                                            type="number"
                                            class="form-control"
                                            placeholder="Adhaar Number"
                                            aria-label="recipientadhaar"
                                            aria-describedby="basic-addon1"
                                            required
                                            />
                                        </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="recipientname"
                                                ><i class="mdi mdi-account fs-6"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="name"
                                        type="text"
                                        class="form-control"
                                        placeholder="Full name"
                                        aria-label="recipientname"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="recipientemail"
                                                ><i class="mdi mdi-email fs-6"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="email"
                                        type="email"
                                        class="form-control"
                                        placeholder="Email"
                                        aria-label="recipientemail"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="recipientcontact"
                                                ><i class="mdi mdi-phone fs-6"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="contact"
                                        type="number"
                                        class="form-control"
                                        placeholder="Contact"
                                        aria-label="recipientcontact"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="recipientaddress"
                                                ><i class="mdi mdi-account-location fs-6"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="address"
                                        type="text"
                                        class="form-control"
                                        placeholder="Address"
                                        aria-label="recipientaddress"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="recipientdob"
                                                ><i class="mdi mdi-cake-variant fs-6"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="dob"
                                        type="date"
                                        class="form-control"
                                        placeholder="DOB"
                                        aria-label="recipientdob"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="gender"
                                                ><i class="mdi mdi-gender-male-female fs-6"></i
                                            ></span>
                                        </div>
                                        <select
                                        required
                                        class="form-select shadow-none form-control"
                                        id="recipientgender"
                                        name="gender"
                                        aria-label="recipientgender">
                                            <option value="">Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="recipientweight"
                                                ><i class="mdi mdi-weight fs-6"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="weight"
                                        type="number"
                                        class="form-control"
                                        placeholder="Weight"
                                        aria-label="recipientweight"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="bloodgroup"
                                                ><i class="mdi mdi-dna fs-6"></i
                                            ></span>
                                        </div>
                                        <select 
                                        required
                                        class="form-select shadow-none form-control"
                                        id="recipientbloodgroup"
                                        name="bloodGroup"
                                        aria-label="recipientbloodgroup">
                                            <option value="">Blood group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span
                                            class="input-group-text bg-info text-white h-100"
                                            id="recipientID"
                                            ><i class="mdi mdi-lock fs-6"></i
                                        ></span>
                                        </div>
                                        <input
                                        name="adhaarFile"
                                        type="file"
                                        class="form-control"
                                        placeholder=""
                                        aria-label="recipientID"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                    <label for="donorID" style="color:white;">Upload recipient's Adhaar card properly showing the DOB</label>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span
                                            class="input-group-text bg-info text-white h-100"
                                            id="donorID"
                                            ><i class="mdi mdi-lock fs-6"></i
                                        ></span>
                                        </div>
                                        <input
                                        name="presFile"
                                        type="file"
                                        class="form-control"
                                        placeholder=""
                                        aria-label="donorID"
                                        
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                    <label for="donorID" style="color:white;">Upload valid prescription/referral</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                        <div class="form-group">
                            <div class="pt-3 d-grid">
                            <button
                                class="btn btn-block btn-lg btn-info"
                                type="submit">
                                Add
                            </button>
                            </div>
                        </div>
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
