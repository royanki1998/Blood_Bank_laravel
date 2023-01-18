<!DOCTYPE html>
<html dir="ltr" lang="en">
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
    <title>Allot Blood</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/extra-libs/multicheck/multicheck.css"
    />
    <link
      href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <x-header_dashboard/>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <x-sidebar/>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/index">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Allot Blood
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center">

          <div class="auth-box border-top border-secondary">
              <div>
                  <div class="text-center text-dark py-4">
                      <h2>Blood Allotment</h2>

                  </div>

                  <!-- Form -->
                  <form class="form-horizontal mt-3" action="allotBlood" method="post">
                    @csrf
                    @if(Session::has('allotSuccess'))
                    <div class="alert alert-success">{{Session::get('allotSuccess')}}</div>
                    @endif
                     @if(Session::has('allotFail'))
                    <div class="alert alert-danger">{{Session::get('allotFail')}}</div>
                     @endif
                      <div class="row pb-4">
                          <div class="col-12">
                              <div class="row">
                                  <!-- <div class="col-md-6 mb-4">
                                      <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                              <span
                                                  class="input-group-text bg-success text-white h-100"
                                                  id="bloodgroup"
                                                  ><i class="mdi mdi-dna fs-5"></i
                                              ></span>
                                          </div>
                                          <select 
                                          class="form-select shadow-none form-control form-select-lg bg-dark text-white"
                                          id="receiverbloodgroup"
                                          name="receiverbloodgroup"
                                          aria-label="receiverbloodgroup">
                                              <option value="">Select blood group</option>
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
                                  </div> -->
                                  
                                      <div class="input-group mb-4">
                                          <div class="input-group-prepend">
                                              <span
                                                  class="input-group-text bg-success text-white h-100"
                                                  id="recipientadhaar"
                                                  ><i class="mdi mdi-newspaper fs-4"></i
                                              ></span>
                                          </div>
                                          <input
                                          name="r_id"
                                          type="number"
                                          class="form-control form-control-lg bg-dark text-white"
                                          placeholder="Recipient's Adhaar No."
                                          aria-label="recipientadhaar"
                                          aria-describedby="basic-addon1"
                                          required
                                          />
                                      </div>
                                  
                              </div>

                              <div class="row">
                                  <div class="col-md-6 mb-4">
                                      <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                              <span
                                                  class="input-group-text bg-success text-white h-100"
                                                  id="units"
                                                  ><i class="mdi mdi-phone fs-4"></i
                                              ></span>
                                          </div>
                                          <input
                                          name="unit"
                                          min="1"
                                          type="number"
                                          class="form-control form-control-lg bg-dark text-white"
                                          placeholder="Units"
                                          aria-label="Units"
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
                                                  id="allotationdate"
                                                  ><i class="mdi mdi-account-location fs-4"></i
                                              ></span>
                                          </div>
                                          <input
                                          name="date"
                                          type="date"
                                          class="form-control form-control-lg bg-dark text-white"
                                          placeholder="Allotation date"
                                          aria-label="allotationdate"
                                          aria-describedby="basic-addon1"
                                          required
                                          />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row border-top border-secondary">
                          <div class="col-12">
                          <div class="form-group py-4">
                              <div class="pt-3 d-grid">
                              <button
                                  class="btn btn-block btn-lg btn-info"
                                  type="submit"
                              >
                                  Allot Blood
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
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
  </body>
</html>
