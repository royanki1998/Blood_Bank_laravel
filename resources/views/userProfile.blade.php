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
        <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control shadow-none border border-danger" placeholder="Search Blood" aria-label="Search">
        </form> -->
        <ul class="nav">
            <li>        
                <div class="input-group mb-3 px-2">
                    <form action="/searchBlood" method="post">
                        @csrf
                    <input name="blood_group" type="text" class="form-control shadow-none border border-danger" placeholder="Search Blood here" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button type="submit" class="btn btn-secondary text-danger" data-bs-toggle="modal" data-bs-target="#searchModal">Search</button>
                    </form>
                </div>
            </li>
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
        @if(Session::has('bloodFound'))
            <div class="alert alert-success" role="alert">
                     Blood available. Reach our nearest center to receive.
            </div>
        @endif
        @if(Session::has('bloodNotFound'))
        <div class="alert alert-danger" role="alert">
            Blood not available.
        </div>
        @endif
    </div>
    <!-- </header> -->
    

    <div class="p-4 p-md-5 mb-4">
        <img id="profile_img" src="/image/back3.jpeg" alt="">
    </div>
    @if(Session::has('donorEligible'))
    <div class="card" style="width: 400px; position:absolute; right:0px; top:250px;">
        <div class="card-body shadow-lg">
            <h5 class="card-title text-danger">Donation Status</h5>
            <h6 class="card-subtitle mb-2 text-muted">You are eligible for donation. Reach our nearest center for donatioin.</h6><br><br>
            <p class="card-text"><strong>Your last donation details</strong></p>
        </div>
    </div>
    @endif
    @if(Session::has('donorNotEligible'))
    <div class="card" style="width: 400px; position:absolute; right:0px; top:250px;">
        <div class="card-body shadow-lg">
            <h5 class="card-title text-danger">Donation Status</h5>
            <h6 class="card-subtitle mb-2 text-muted">You are Not eligible for donation.</h6><br><br>
            <p class="card-text"><strong>Your last donation details</strong></p>
        </div>
    </div>
    @endif



    <!-- Modal -->

    <!-- <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" visiblity="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
              
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Requested blood is available.Reach our nearest camp to receive.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div> -->
    
    
</body>
</html>