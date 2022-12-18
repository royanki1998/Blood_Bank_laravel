<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('cdn')
    <title>Login Page</title>

</head>
<body>
    <!-- Section: Design Block -->
    <section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="background-image: url('/image/sign-in.jpg');height: 330px;">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><b>Home</b></a></li>
          <li class="breadcrumb-item active" aria-current="page"><b>Login</b></li>
        </ol>
      </nav>
  </div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong justify-content-center" style="
        margin-top: -150px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(10px);
        width:700px;
        position:absolute;
        left:300px;
        ">
    <div class="card-body py-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
          <h2 class="fw-bold mb-5">Sign in to your account</h2>
          <form class="needs-validation" method="post">
              <div class="form-outline mb-4">
                <div class="form-outline">
                  <input type="text" id="username" class="form-control  shadow-none" required/>
                  <label class="form-label" for="fname">Username</label>
                </div>
              </div>
              <div class="form-outline mb-4">
                <div class="form-outline">
                  <input type="password" id="password" class="form-control  shadow-none" required />
                  <label class="form-label" for="lname">Pasword</label>
                </div>
              </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign in
            </button>
            <div class="text-center">
              <a style="color:red;" href="/register">Don't have an account? Register here</a><br>
              <a class="large text-primary" href="#!">Forgot password?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br>
<!-- Section: Design Block -->

</body>
</html>
<x-footer />