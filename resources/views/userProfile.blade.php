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
                <ul class="nav">
            <li class="nav-item"><a href="/" class="nav-link clr" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/donationForm" class="nav-link clr">Donate</a></li>
            <li class="nav-item"><a href="#" class="nav-link clr">Logout</a></li>
            </li>
        </ul>
        </header>
    </div>
    <!-- </header> -->

    <div class="p-4 p-md-5 mb-4">
        <img id="profile_img" src="/image/back3.jpeg" alt="">
    </div>
</body>
</html>