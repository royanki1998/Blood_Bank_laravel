<x-header />

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@include('cdn')
	<title>Home Page</title>

</head>
<body>
	<div>
		<img class="back backimg" src="/image/back2.jpeg">
	    <div style="font-family: 'Abril Fatface',cursive; color:black; font-size:50px;position:absolute; bottom:200px; left:200px;">
			<p> The blood you donate gives <br>someone another chance at</p>
			<p style="font-size:80px;position:absolute; bottom:-40px; left:640px;color:red; ">LIFE</p>
	    </div>
	</div><br> <br>

	<!-- ABOUT SECTION -->
	<div id="about" class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 about-second">
				<figure class="shadow-lg">
					<img style="height:400px; width:550px;" class="rounded" src="/image/about1.jpg" alt="about" />
				</figure> <!-- end .cause-img  -->
			</div> 

			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 about-first">
				<div style="background-color:#F4F6F6; font-size:22px; font-family: 'Dosis', sans-serif;" class="rounded col-lg-12 col-md-12 col-sm-12 text-left p-4 shadow-sm">
					<br><h2 style="font-size:45px;"><strong>Who We Are?</strong></h2><br>
					<p>Blood Buddies is for public donation center with blood donation members in the changing health care system.</p>
                    	<ul class="custom-bullet-list">
                            <li>Specialist blood donors and clinical supervision.</li>
                            <li>Increasing communication with our members.</li>
                            <li>High quality assessment, diagnosis and treatment.</li>
                            <li>Examine critically to ensure alignment.</li>
                            <li>The extra care of a multi-disciplinary team.</li>
                        </ul>
                </div> 
			</div>

		</div>
	</div>
	<!-- ABOUT END -->


	<!-- Donor Section -->
	<section class="donor-first">
		<div class="p-5" style="background-image: url('/image/donor.jpg');height: 450px;"></div>

		<div class="card mx-4 mx-md-5" style="margin-top: -100px;">
			<div class="card-body">
				<div class="row d-flex justify-content-center">
					<div class="col-10 col-sm-8 col-lg-6 p-2 hidden-md hidden-xs hidden-sm">
						<img src="/image/back2.jpeg" class=" mx-lg-auto" alt="Bootstrap Themes" width="600" height="400" loading="lazy">
					</div>


					<!-- carousal start -->

					<div class="swiper mySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="col-lg-6">
									<h2 class=" text-danger" style="font-family: 'Dosis', sans-serif; font-size:40px;">Mesage from Donors</h2>
									<br>
									<div>
										<p>I proudly donate blood on a regular basis because it gives others something they desperately need to survive. Just knowing I can make a difference in someone else's life makes me feel great!      </p>
												<!-- <img src="/image/back2.jpeg" style="height:400px; width:500px;" /> -->
												<h6>Brandon Munson</h6>
												<span>CTO, Fulcrum Design, USA</span>
									</div>
								</div>

							</div>

							<div class="swiper-slide">
								<div class="col-lg-6 px-4 py-2">
									<h2 class=" text-danger" style="font-family: 'Dosis', sans-serif; font-size:40px;">Mesage from Donors</h2>
									<br>
									<div>
										<p>I proudly donate blood on a regular basis because it gives others something they desperately need to survive. Just knowing I can make a difference in someone else's life makes me feel great!      </p>
												<!-- <img src="/image/back2.jpeg" style="height:400px; width:500px;" /> -->
												<h6>Brandon Munson</h6>
												<span>CTO, Fulcrum Design, USA</span>
									</div>
								</div>

							</div>

						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
				</div>
			</div>
		</div><br><br>
	</section>

	<!--CAMPAIGNS  -->
	<section id="campaigns" class="section-content-block bg-white" >

			<div class="container">
				<div class="row">
					
					<div class="col-sm-12 col-md-5">

						<div class="row section-heading-wrapper">

							<div class="col-md-12 col-sm-12 text-left " style="font-family: 'Dosis', sans-serif;">
								<h1><b>OUR CAMPAIGNS</b></h1><br>
								<h4 class="margin-top-24">
									<small>All over the world we have arranged total sixty thousands donation campaign 
										and visit thousands of other venues on various occasions. </small>
								</h4><br>
								<a class="btn btn-danger margin-top-32" href="#">Load All Campaigns</a>
							</div> 
						</div> 
					</div>

					<div class="col-sm-12 col-md-7">
						
						<div class="row wow fadeInRight">
							<img src="/image/donation.jpeg" style="height:400px; width:500px;">
						</div> 
					</div>
				</div>
			</div> 
	</section> 


<!-- FOOTER -->
<x-footer />


 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
	var swiper = new Swiper(".mySwiper", {
		navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
		},
	});
	</script>
</body>
</html>

