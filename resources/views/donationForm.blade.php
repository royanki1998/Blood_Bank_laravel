<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('cdn')
    <title>Donation Form</title>
</head>
<body>
    <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="background-image: url('/image/back3.jpeg');height: 350px;">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/userHome"><b>Home</b></a></li>
          <li class="breadcrumb-item active" aria-current="page"><b>Donation Form</b></li>
        </ol>
      </nav>
  </div>
  <!-- Background image end -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -120px;background: hsla(0, 0%, 100%, 0.8);backdrop-filter: blur(30px);">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-3">Donation Form</h2>
          <p style="color:red;margin-bottom:40px;">Fill the form with correct informations only. In case the testimonial stated do not match during physical verification you won't be able to donate.</p>
          <form class="needs-validation" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="fname" class="form-control  shadow-none" required/>
                  <label class="form-label" for="fname">First name</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="lname" class="form-control  shadow-none" required />
                  <label class="form-label" for="lname">Last name</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="date" id="age" class="form-control shadow-none" required />
                  <label class="form-label" for="dob">DOB</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="address" class="form-control shadow-none" />
                  <label class="form-label" for="address">Address</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="email" id="pass" class="form-control shadow-none" required />
                  <label class="form-label" for="email">Email</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="number" id="conpass" class="form-control shadow-none" required />
                  <label class="form-label" for="contact">Contact</label>
                </div>
              </div>
            </div>
            
            <!-- Adhaar input -->
            <div class="row">
              <div class="col-md-12 mb-4">
                <div class="form-outline">
                  <input type="adhaar" id="pass" class="form-control shadow-none" required />
                  <label class="form-label" for="adhaar">Adhaar no.</label>
                </div>
              </div>
            </div>


            <!-- Gender & contact input -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <select class="form-select shadow-none" id="gender" name="gender">
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
                  <input type="text" id="contact" class="form-control shadow-none" required />
                  <label class="form-label" for="contact">Blood Group</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="weight" id="pass" class="form-control shadow-none" required />
                  <label class="form-label" for="adhaar">Weight</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="pulse" id="conpass" class="form-control shadow-none" required />
                  <label class="form-label" for="pulse">Pulse</label>
                </div>
              </div>
            </div>

            <!-- Password input -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="password" id="pass" class="form-control shadow-none" required />
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

