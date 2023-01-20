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
    <title>Add New Campaign Details</title>
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
                      Add New Campaign
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
                      <h2>Add Campaign Details</h2>

                  </div>

                  <!-- Form -->
                  <form class="form-horizontal mt-3" action="addCampaign" method="POST" enctype="multipart/form-data">
                  @csrf
                  @if(Session::has('campAdded'))
                 <div class="alert alert-success">{{Session::get('campAdded')}}</div>
                 @endif
                 @if(Session::has('campAddedFail'))
                 <div class="alert alert-danger">{{Session::get('campAddedFail')}}</div>
                 @endif
                    <div class="row pb-4">
                        <div class="col-12">
                            <div class="row">
                                <!-- <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="c_id"
                                                ><i class="mdi mdi-account fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="id"
                                        type="text"
                                        class="form-control form-control-lg"
                                        placeholder="Camapign ID"
                                        aria-label="campaignid"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                </div> -->
                                <!-- <div class="col-md-6 mb-4"> -->
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="c_name"
                                                ><i class="mdi mdi-account fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="c_name"
                                        type="text"
                                        class="form-control form-control-lg"
                                        placeholder="Camapign name"
                                        aria-label="campaignname"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                <!-- </div> -->
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="c_loc"
                                                ><i class="mdi mdi-cake-variant fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="c_location"
                                        type="name"
                                        class="form-control form-control-lg"
                                        placeholder="Campaign Location"
                                        aria-label="campaignlocation"
                                        aria-describedby="basic-addon1"
                                        required
                                        />
                                    </div>
                                    @if ($errors->has('c_name'))
                                      <span class="text-danger">Campaign name has already been taken !</span>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text bg-success text-white h-100"
                                                id="c_date"
                                                ><i class="mdi mdi-weight fs-4"></i
                                            ></span>
                                        </div>
                                        <input
                                        name="c_date"
                                        type="date"
                                        class="form-control form-control-lg"
                                        placeholder="Campaign date"
                                        aria-label="campaigndate"
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



