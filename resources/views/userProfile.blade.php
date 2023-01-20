<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('cdn')
    <title>User Profile</title>
</head>
<body>
    <!-- Header start -->
    <div class="container" id="home">
        <header class="d-flex flex-wrap justify-content-center py-4 mb-4 border-bottom position-sticky">
        <a href="/" class="mb-3 mb-md-0 me-md-auto clr" style="font-family:  'Abril Fatface',cursive;">
            <h3>My Profile</h3>
        </a>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control shadow-none border border-danger" placeholder="Search Blood" aria-label="Search">
        </form>
        <ul class="nav">
            <li class="nav-item"><a href="/" class="nav-link clr" aria-current="page">Home</a></li>
            <li class="nav-item">
                <a href="/showDonorForm" class="nav-link clr drop-a">Donate</a>
                <!-- <div class="dropdown-content">
                    <a href="/userDonateM">Donation Form [Male]</a>
                    <a href="/userDonateF">Donation Form [Female]</a>
                </div>         -->
            </li>
            <li class="nav-item"><a href="/logout" class="nav-link clr">Logout</a></li>
            </li>
        </ul>
        </header>
    </div>
    <!-- </header> -->

    <div class="p-4 p-md-5 mb-4">
        <img id="profile_img" src="/image/back3.jpeg" alt="">
    </div>

    <div class="card" style="width: 400px; position:absolute; right:0px; top:250px;">
        <div class="card-body shadow-lg">
            <h5 class="card-title text-danger">Donation Status</h5>
            <h6 class="card-subtitle mb-2 text-muted">You have not donated yet</h6><br><br>
            <p class="card-text"><strong>Your last donation details</strong></p>
        </div>
    </div>
</body>
</html>