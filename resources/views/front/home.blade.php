@extends('front.layouts.app')

@section('main')

<div class="hero-slider">
	<div class="slider-item th-fullpage hero-area" style="background-image:linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
    url(assets/images/BGpic.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Asia Technical Training Center</h1>
					<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Govt. Registered Training Organization from Bangladesh Technical <br> Education Board- BTEB & National Sk</p>
					<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
						href="service.html">Explore Us</a>
				</div>
			</div>
		</div>
	</div>
	
</div>

<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-6">
        <!-- section title -->
        <div class="title text-center">
          <h2>What Do We Offer</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Voluptates, earum. </p>
          <div class="border"></div>
        </div>
        <!-- /section title -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row text-center">
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
              <i class="tf-ion-ios-alarm-outline"></i>
              <h4>Time Management</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
              <i class="tf-ion-ios-briefcase-outline"></i>
              <h4>Marketing Ideas</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
              <i class="tf-ion-ios-email-outline"></i>
              <h4>Mail Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
              <i class="tf-ion-ios-locked-outline"></i>
              <h4>Secure System</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 text-center">
				<h2>Endroll For Our Various Courses</h2>
				<a href="contact.html" class="btn btn-main">Contact Us</a>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Counter Section
==================================== -->
<section class="counter-wrapper section-sm">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 text-center">
				<div class="title">
					<h2>Award-Winning Agency</h2>
					<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- first count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-alarm-outline"></i>
					<div>
						<span class="counter" data-count="150">0</span>
					</div>
					<h3>Happy Clients</h3>
				</div>
			</div>
			<!-- end first count item -->

			<!-- second count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-analytics-outline"></i>
					<div>
						<span class="counter" data-count="130">0</span>
					</div>
					<h3>Projects completed</h3>
				</div>
			</div>
			<!-- end second count item -->

			<!-- third count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-compose-outline"></i>
					<div>
						<span class="counter" data-count="99">0</span>
					</div>
					<h3>Positive feedback</h3>

				</div>
			</div>
			<!-- end third count item -->

			<!-- fourth count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item kill-border">
					<i class="tf-ion-ios-bolt-outline"></i>
					<div>
						<span class="counter" data-count="250">0</span>
					</div>
					<h3>Cups of Coffee</h3>
				</div>
			</div>
			<!-- end fourth count item -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->


<!--
Start Blog Section
=========================================== -->
<section class="blog" id="blog">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center ">
					<h2> Latest <span class="color">Posts</span></h2>
					<div class="border"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
				</div>
			</div>
			<!-- /section title -->
		</div>

		<div class="row">
			<!-- single blog post -->
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img loading="lazy" src="images/blog/post-1.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="single-post.html">Reasons to Smile</a></h3>
						<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
							moon officia aute, non skateboard dolor brunch.</p>
						<a class="btn btn-main" href="single-post.html">Read more</a>
					</div>
				</div>
			</article>
			<!-- /single blog post -->

			<!-- single blog post -->
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img loading="lazy" src="images/blog/post-2.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="single-post.html">A Few Moments</a></h3>
						<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
							moon officia aute, non skateboard dolor brunch.</p>
						<a class="btn btn-main" href="single-post.html">Read more</a>
					</div>
				</div>
			</article>
			<!-- end single blog post -->

			<!-- single blog post -->
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img loading="lazy" src="images/blog/post-3.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="single-post.html">Hints for Life</a></h3>
						<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
							moon officia aute, non skateboard dolor brunch.</p>
						<a class="btn btn-main" href="single-post.html">Read more</a>
					</div>
				</div>
			</article>
			<!-- end single blog post -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

@endsection
