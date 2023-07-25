@extends('layout')
@section('content')
		<!-- Header Close -->
		<div class="banner">
			<div class="owl-four owl-carousel">
				<img src="images/page-banner.jpg" alt="Image of Bannner">
				<img src="images/page-banner2.jpg" alt="Image of Bannner">
				<img src="images/page-banner3.jpg" alt="Image of Bannner">
			</div>
			<div class="container ">
		
			<h1 style='color:yellow !important';>Contact Us</h1>
			
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>
		<!-- <div class="banner">
			<div class="owl-five owl-carousel owl-theme">
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
          </div>
		</div> -->
		<section class="contact-page-section">
			<div class="container">
				<div class="people-info-wrap">
					<h2>leave us your info</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</p>
					<form method="post" action="">
						@csrf
						<span>
						<input type="text" placeholder="Full Name*"name="name" class="input- name">
						<input type="email" placeholder="Email*"  name="email" class="input- email">
						</span>
						<input type="text" placeholder="Subject*" name="subject" class="input- subject">
						<textarea placeholder="Messages*" name="message" class="input-">
							
						</textarea>
						<input type="submit" value="submit now">
					</form>
				</div>

				<div class="contact-info">
					<h2>contact info</h2>
					<ul class="contact-list">
						<li><i class="fas fa-location-arrow"></i> 
							<span>
								<p>Trivandrum, Nagarcoil, Kochi</p>
							  
							</span>
						</li>
						<li><i class="fas fa-phone"></i>
							<span> 
								<p>Phone:+917592939481, Mobile: +917592939481</p>
								<p>Fax:7838478387</p>
							</span>
						</li>
						<li><i class="fas fa-envelope"></i>
							<span>
								<p>info@scopeindia.org</p>
							</span>
						</li>
					</ul>
					<ul class="contact-social">
						<li><a href=""><i class="fab fa-viber"></i></a></li>
						<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</section>

		<!-- <section class="map-section"> -->
			<!-- <iframe src="https://www.google.com/search?sa=X&q=scopeindia&ved=2ahUKEwidpoKNvP7_AhUCUGwGHU4MDcUQuzF6BAgKEAI&biw=1536&bih=343&dpr=1.25" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section> -->

		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+917592939481"><i class="fas fa-phone"></i> +917592939481</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
		
			@endsection