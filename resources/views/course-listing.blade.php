@extends('layout')
@section('content')
		<!-- Header Close -->
		<div class="banner">
			<div class="owl-four owl-carousel">
				<img src="images/page-banner.jpg" alt="Image of Bannner">
				<img src="images/page-banner2.jpg" alt="Image of Bannner">
				<img src="images/page-banner3.jpg" alt="Image of Bannner">
			</div>
			<div class="container">
				<h1>welcome to education pro</h1>
				<h3>With our advance search feature you can now find the trips for you...</h3>
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
		<!-- Banner Close -->
		<section class="course-listing-page">
			<div class="container">
				<div id="filters" class="button-group">
					<button class="button" data-filter="*">all</button>
  					<button class="button" data-filter=".business">business</button>
  					<button class="button" data-filter=".design">design</button>
  					<button class="button" data-filter=".development">development</button>
  					<button class="button" data-filter=".seo">seo</button>
  					<button class="button" data-filter=".marketing">marketing</button>
				</div>

				<div class="grid" id="cGrid">
					<div class="grid-item business" data-category="business">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>

					<div class="grid-item business" data-category="business">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>

					<div class="grid-item design" data-category="design">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>

					<div class="grid-item design" data-category="design">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>

					<div class="grid-item development" data-category="development">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>

					<div class="grid-item design" data-category="design">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>

					<div class="grid-item seo" data-category="seo">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>

					<div class="grid-item marketing" data-category="marketing">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>
 
					<div class="grid-item seo" data-category="seo">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>

					<div class="grid-item seo" data-category="seo">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>

					<div class="grid-item seo" data-category="seo">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>

					<div class="grid-item seo" data-category="seo">
						<div class="img-wrap">
							<img src="images/course-pic.jpg" alt="courses picture">
						</div>
						<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span> 4,00,000</p>
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
		@endsection