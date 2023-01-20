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
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <style>
      .w-5{
        display : none
      }
    </style>
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
                      Blood Details Table
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
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row d-flex justify-content-evenly">
            <!-- Column -->
            <div class="col-md-4 col-lg-2">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <form action="/bloodTable" method="post">
                    @csrf
                    <input type="hidden" name="blood_group" value="A+">
                    <button type="submit" class="btn bg-transparent">
                      <h3 class="text-white py-3">A+</h3>
                  </button>
                </form>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-4 col-lg-2">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                <form action="/bloodTable" method="post">
                    @csrf
                    <input type="hidden" name="blood_group" value="A-">
                    <button type="submit" class="btn bg-transparent">
                      <h3 class="text-white py-3">A-</h3>
                  </button>
                </form>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-4 col-lg-2">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                <form action="/bloodTable" method="post">
                    @csrf
                    <input type="hidden" name="blood_group" value="B+">
                    <button type="submit" class="btn bg-transparent">
                      <h3 class="text-white py-3">B+</h3>
                  </button>
                </form>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-4 col-lg-2">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                <form action="/bloodTable" method="post">
                    @csrf
                    <input type="hidden" name="blood_group" value="B-">
                    <button type="submit" class="btn bg-transparent">
                      <h3 class="text-white py-3">B-</h3>
                  </button>
                </form>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-4 col-lg-2">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                <form action="/bloodTable" method="post">
                    @csrf
                    <input type="hidden" name="blood_group" value="AB+">
                    <button type="submit" class="btn bg-transparent">
                      <h3 class="text-white py-3">AB+</h3>
                  </button>
                </form>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-4 col-lg-2">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                <form action="/bloodTable" method="post">
                    @csrf
                    <input type="hidden" name="blood_group" value="AB-">
                    <button type="submit" class="btn bg-transparent">
                      <h3 class="text-white py-3">AB-</h3>
                  </button>
                </form>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-4 col-lg-2">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                <form action="/bloodTable" method="post">
                    @csrf
                    <input type="hidden" name="blood_group" value="O+">
                    <button type="submit" class="btn bg-transparent">
                      <h3 class="text-white py-3">O+</h3>
                  </button>
                </form>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-4 col-lg-2">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                <form action="/bloodTable" method="post">
                    @csrf
                    <input type="hidden" name="blood_group" value="O-">
                    <button type="submit" class="btn bg-transparent">
                      <h3 class="text-white py-3">O-</h3>
                  </button>
                </form>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Blood Details Table</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>Blood id</th>
                          <th>Blood Group</th>
                          <th>Donor ID</th>
                          <th>Donation date</th>
                          <th>Expiry</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      @foreach($bloods as $blood)
                      <tbody>
                          <!-- PHP CODE FOR INSERTION FROM DATABASE / ACTION WALE FIELD ME DELETE AUR EDIT BUTTON HONA HOAG  -->
                          <tr>
                            <td>{{$blood['id']}}</td>
                            <td>{{$blood['blood_group']}}</td>
                            <td>{{$blood['donor_adhaar_no']}}</td>
                            <td>{{$blood['d_date']}}</td>
                            <td>{{$blood['valid_upto']}}</td>
                            <td>
                              <form action="/delBlood" method="POST" >
                                @csrf
                                <input type="hidden" name ="id" value="{{$blood['id']}}">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                              
                            </td>
                         </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
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
      //$("#zero_config").DataTable();
    </script>
  </body>
</html>
