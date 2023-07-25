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

		<section class="gallery-section2">
			<div class="container">
				<div id="filters" class="button-group">
					<button class="button" data-filter="*">all</button>
  					<button class="button" data-filter=".business">business</button>
  					<button class="button" data-filter=".design">design</button>
  					<button class="button" data-filter=".development">development</button>
  					<button class="button" data-filter=".seo">seo</button>
  					<button class="button" data-filter=".marketing">marketing</button>
				</div>
			</div>
				<section class="gallery-images-section gallery2" id="cGrid">
					<div class="gallery-img-wrap grid-item business" data-category="business">
						<a href="images/gallery-img1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img1.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item business" data-category="business">
						<a href="images/gallery-img2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img2.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item design" data-category="design">
						<a href="images/gallery-img3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img3.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item design" data-category="design">
						<a href="images/gallery-img4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img4.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item development" data-category="development">
						<a href="images/gallery-img5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img5.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item design" data-category="design">
						<a href="images/gallery-img6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img6.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img7.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item marketing" data-category="marketing">
						<a href="images/gallery-img8.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img8.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img9.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img9.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img10.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img10.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img11.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img12.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img12.jpg" alt="gallery-images">
						</a>
					</div>
				</section>
				<!-- End of gallery Images -->				
		</section>
		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
		@endsection