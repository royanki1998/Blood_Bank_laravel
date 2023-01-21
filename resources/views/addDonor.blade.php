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
    <title>Donor Register</title>
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
                      Add Donor Details
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
            
            
            <div>
                <div class="text-center text-white py-4">
                    <h2>Add New Donor Details</h2>
                    <p>Details must match any valid ID proof of the donor(Adhaar, Voter ID, Pasport, etc)</p>
                </div>

                <!-- Form -->
                <form class="form-horizontal mt-3" action="addDonor" method="POST" enctype="multipart/form-data">
                  @csrf
                  @if(Session::has('donorAdded'))
                 <div class="alert alert-success">{{Session::get('donorAdded')}}</div>
                 @endif
                 @if(Session::has('donorFailed'))
                 <div class="alert alert-danger">{{Session::get('donorFailed')}}</div>
                 @endif
                    <div class="row pb-4">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text bg-success text-white h-100"
                                                    id="donoradhaar"
                                                    ><i class="mdi mdi-newspaper fs-4"></i
                                                ></span>
                                            </div>
                                            <input
                                            name="adhaar_no"
                                            type="number"
                                            class="form-control form-control-lg"
                                            placeholder="Adhaar Number"
                                            aria-label="donoradhaar"
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
                                                id="donorname"
                                                ><i class="mdi mdi-account fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="name"
                                        type="text"
                                        class="form-control form-control-lg"
                                        placeholder="Full name"
                                        aria-label="donorname"
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
                                                id="donoremail"
                                                ><i class="mdi mdi-email fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="email"
                                        type="email"
                                        class="form-control form-control-lg"
                                        placeholder="Email"
                                        aria-label="donoremail"
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
                                                id="donorcontact"
                                                ><i class="mdi mdi-phone fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="phone"
                                        type="number"
                                        class="form-control form-control-lg"
                                        placeholder="Contact"
                                        aria-label="donorcontact"
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
                                                id="donoraddress"
                                                ><i class="mdi mdi-account-location fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="address"
                                        type="text"
                                        class="form-control form-control-lg"
                                        placeholder="Address"
                                        aria-label="donoraddress"
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
                                                id="donordob"
                                                ><i class="mdi mdi-cake-variant fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="dob"
                                        type="date"
                                        class="form-control form-control-lg"
                                        placeholder="DOB"
                                        aria-label="donordob"
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
                                                ><i class="mdi mdi-gender-male-female fs-5"></i
                                            ></span>
                                        </div>
                                        <select 
                                        class="form-select shadow-none form-control form-select-lg"
                                        id="donorgender"
                                        required
                                        name="gender"
                                        aria-label="donorgender">
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
                                                id="donorweight"
                                                ><i class="mdi mdi-weight fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="weight"
                                        type="number"
                                        class="form-control form-control-lg"
                                        placeholder="Weight"
                                        aria-label="donorweight"
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
                                                ><i class="mdi mdi-dna fs-5"></i
                                            ></span>
                                        </div>
                                        <select 
                                        name="bloodGroup"
                                        required
                                        class="form-select shadow-none form-control form-select-lg"
                                        id="donorbloodgroup"
                                        name="donorbloodgroup"
                                        aria-label="donorbloodgroup">
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

                            <!-- <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="adhaar"
                                                ><i class="mdi mdi-weight fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        type="number"
                                        class="form-control form-control-lg"
                                        placeholder="Adhaar No."
                                        aria-label="adhaar"
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
                                                id="basic-addon1"
                                                ><i class="mdi mdi-account-alert fs-5"></i
                                            ></span>
                                        </div>
                                        <select 
                                        class="form-select shadow-none form-control form-control-lg"
                                        id="registerType"
                                        name="registerType"
                                        aria-label="Username">
                                            <option value="">Select type</option>
                                            <option value="donor">Donor</option>
                                            <option value="recipient">Recipient</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            
                            <div class="row">
                                <!-- <div class="col-md-6 mb-4"> -->
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span
                                            class="input-group-text bg-danger text-white h-100"
                                            id="donorID"
                                            ><i class="mdi mdi-lock fs-4"></i
                                        ></span>
                                        </div>
                                        <input
                                        name="donorAdhaarFile"
                                        type="file"
                                        class="form-control form-control-lg"
                                        placeholder=""
                                        aria-label="donorID"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                    <label for="donorID" style="color:white;">Upload donor's Adhaar card properly showing the DOB</label>
                                <!-- </div> -->

                                <!-- <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span
                                            class="input-group-text bg-info text-white h-100"
                                            id="basic-addon2"
                                            ><i class="mdi mdi-lock fs-4"></i
                                        ></span>
                                        </div>
                                        <input
                                        type="password"
                                        class="form-control form-control-lg"
                                        placeholder="Password"
                                        aria-label="Password"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>

                                </div> -->
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
