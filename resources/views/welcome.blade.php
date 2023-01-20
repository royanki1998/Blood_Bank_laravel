<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		
	</style>
	@include('cdn')
	<title>Home Page</title>

</head>
<body>
<div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
	  @if(Session::has('loginID'))
	  <x-user-header />
	  @else
	  <x-header />
	@endif
	<div>
		<img class="back backimg" src="/image/back2.jpeg">
	    <div id="home-main">
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
				<div class="rounded col-lg-12 col-md-12 col-sm-12 text-left p-4 shadow-sm about-in">
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
		<div class="donor-h">
			<h1 class="heading"><u> Donor's message &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></h1>
			<h3 class="sub-heading"> what they say... </h3>
		</div>
		<div class="review" id="review">
						<div class="swiper mySwiper review-slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide slide">
									<i class="fas fa-quote-right"></i>
									<div class="user">
										<img src="/image/jumi.jpg" alt="">
										<div class="user-info">
											<h2>Jumi Kalita</h2>
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
											</div>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
										Sit fugiat consequuntur repellendus aperiam deserunt nihil, 
										corporis fugit voluptatibus voluptate totam neque illo placeat 
										eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
								</div>
								<div class="swiper-slide slide">
									<i class="fas fa-quote-right"></i>
									<div class="user">
										<img src="/image/Passport.jpg" alt="">
										<div class="user-info">
											<h4>Ankita Roy</h4>
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
											</div>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
										Sit fugiat consequuntur repellendus aperiam deserunt nihil, 
										corporis fugit voluptatibus voluptate totam neque illo placeat 
										eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
								</div>
								<div class="swiper-slide slide">
									<i class="fas fa-quote-right"></i>
									<div class="user">
										<img src="/image/donor1.jpg" alt="">
										<div class="user-info">
											<h4>Prashanka Chakrabarty</h4>
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
											</div>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
										Sit fugiat consequuntur repellendus aperiam deserunt nihil, 
										corporis fugit voluptatibus voluptate totam neque illo placeat 
										eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
								</div>
								<div class="swiper-slide slide">
									<i class="fas fa-quote-right"></i>
									<div class="user">
										<img src="/image/geetu.jpg" alt="">
										<div class="user-info">
											<h4>Geetashri Barman</h4>
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
											</div>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
										Sit fugiat consequuntur repellendus aperiam deserunt nihil, 
										corporis fugit voluptatibus voluptate totam neque illo placeat 
										eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
								</div>
								<div class="swiper-slide slide">
									<i class="fas fa-quote-right"></i>
									<div class="user">
										<img src="/image/donor2.jpg" alt="">
										<div class="user-info">
											<h4>Den Sons</h4>
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
											</div>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
										Sit fugiat consequuntur repellendus aperiam deserunt nihil, 
										corporis fugit voluptatibus voluptate totam neque illo placeat 
										eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
								</div>
								<div class="swiper-slide slide">
									<i class="fas fa-quote-right"></i>
									<div class="user">
										<img src="/image/Koala.jpg" alt="">
										<div class="user-info">
											<h4>Joshna Boro</h4>
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
											</div>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
										Sit fugiat consequuntur repellendus aperiam deserunt nihil, 
										corporis fugit voluptatibus voluptate totam neque illo placeat 
										eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
								</div>
								<div class="swiper-slide slide">
									<i class="fas fa-quote-right"></i>
									<div class="user">
										<img src="/image/donor3.jpg" alt="">
										<div class="user-info">
											<h4>John Will</h4>
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
											</div>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
										Sit fugiat consequuntur repellendus aperiam deserunt nihil, 
										corporis fugit voluptatibus voluptate totam neque illo placeat 
										eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
								</div>

							</div>
							<div class="swiper-button-next" style="color:#FA3737;"></div>
							<div class="swiper-button-prev" style="color:#FA3737;"></div>
							<div class="swiper-pagination"></div>
						</div>
		</div><br><br>
	</section>

	<!-- BECOME A DONOR SECTION -->
		<div class="container my-5 p-3 pb-0 pe-lg-0 pt-lg-5 rounded-3 border donor-re">
			<div class=" p-3 p-lg-5 pt-lg-3" style="margin-left:100px;">
			<i class="fas fa-quote-left" style="color:white; font-size:2em;"></i>
			<h2 style="color:white;">&nbsp;&nbsp;Become a Donor by joinging us....</h2><br>
				<button type="button" class="btn btn-light anim-but"><a href="/register"><b>Register today</b></a></button>
			</div>
		</div>

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
								<a class="btn btn-danger margin-top-32" href="campaigns">Load All Campaigns</a>
							</div> 
						</div> 
					</div>

					<div class="col-sm-12 col-md-7">
						
						<div class="swiper mySwiper2 cam-swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide cam-slide">
								<img src="/image/donation.jpeg" />
								</div>
								<div class="swiper-slide cam-slide">
								<img src="/image/camp4.webp" />
								</div>
								<div class="swiper-slide cam-slide">
								<img src="/image/camp3.jpg" />
								</div>
								<div class="swiper-slide cam-slide">
								<img src="/image/camp1.jpg" />
								</div>
								<div class="swiper-slide cam-slide">
								<img src="/image/camp2.jpeg" />
								</div>
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
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
			slidesPerView: 2,
			spaceBetween: 30,
			slidesPerGroup: 2,
			loop: true,
			loopFillGroupWithBlank: true,
			pagination: {
			el: ".swiper-pagination",
			clickable: true,
			},
			navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
			},
			autoplay: {
			delay: 3500,
			disableOnInteraction: false,
			},
		});
	</script>

	<!-- initialize 2nd slider -->
	 <!-- Initialize Swiper -->
	 <script>
      var swiper = new Swiper(".mySwiper2", {
        effect: "flip",
        grabCursor: true,
		loop: true,
		loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
		autoplay: {
			delay: 3700,
			disableOnInteraction: false,
			},
      });
    </script>
<!-- swiper script end -->

</body>
</html>

