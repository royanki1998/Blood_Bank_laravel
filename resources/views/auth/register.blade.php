<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('cdn')
    <title>Registeration</title>
</head>
<body>
    <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="background-image: url('/image/back1.png');height: 350px;">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><b>Home</b></a></li>
          <li class="breadcrumb-item active" aria-current="page"><b>Registration</b></li>
        </ol>
      </nav>
  </div>
  <!-- Background image end -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
          <form action="{{route('register-user')}}" class="needs-validation" method="post">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input name = "fname" type="text" id="fname" class="form-control  shadow-none" required/>
                  <label class="form-label" for="fname">First name</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input name="lname" type="text" id="lname" class="form-control  shadow-none" required />
                  <label class="form-label" for="lname">Last name</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input name="dob" type="date" id="age" class="form-control shadow-none" required />
                  <label class="form-label" for="dob">DOB</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input name="address" type="text" id="address" class="form-control shadow-none" />
                  <label class="form-label" for="address">Address</label>
                </div>
              </div>
            </div>

            <!-- Gender & contact input -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <select name="gender" class="form-select shadow-none" id="gender" name="gender">
                    <option>Select one</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                  </select>                
                </div>
                <label class="form-label" for="gender">Gender</label>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input name="contact" type="number" id="contact" class="form-control shadow-none" required />
                  <label class="form-label" for="contact">Contact No.</label>
                </div>
              </div>
            </div>


            <!-- Email input -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input name="adhar" type="adhaar" id="pass" class="form-control shadow-none" required />
                  <label class="form-label" for="adhaar">Adhaar no.</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input name="email" type="email" id="conpass" class="form-control shadow-none" required />
                  <label class="form-label" for="email">Email</label>
                </div>
              </div>
            </div>

            <!-- Password input -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input name="password" type="password" id="pass" class="form-control shadow-none" required />
                  <label class="form-label" for="pass">Password</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="password" id="conpass" class="form-control shadow-none" required />
                  <label class="form-label" for="conpass">Confirm password</label>
                </div>
              </div>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>
            <div class="text-center">
              <a style="color:red;" href="/login">Already have an account? Sign-in here</a>

            </div>


          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
<x-footer/>
</body>
</html>

