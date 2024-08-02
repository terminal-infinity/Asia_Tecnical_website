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

<div class="notice_div">
	<marquee width="100%" direction="left" height="30px" >
		@foreach ($document as $data)
		<a href="{{ route('admin.download',$data->id) }}">
			<i class="fa-solid fa-hashtag"></i>
			{{$data->title}}
		</a>
		@endforeach
	</marquee>
</div>



<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-20">
				<h2 class="mb-3">About Our Institution</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus
					dolor harum voluptatibus modi dicta ducimus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat
					cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas.
					Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam!
				</p>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<img loading="lazy" class="img-fluid" src="images/aboutus/Campas.jpg" alt="">
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="logo_title">
		<center><h3>Our Partners</h3></center>
	</div>
	
	<div class="logos">
		<div class="logo_items">
			@foreach ($approvedLogo as $img)
		    <img src="/logoImage/{{ $img->images }}">
			@endforeach
		</div>
		<div class="logo_items">
			@foreach ($approvedLogo as $img)
		    <img src="/logoImage/{{ $img->images }}">
			@endforeach
		</div>
	</div>
</div>


<section class="blog" id="blog">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center ">
					<h2>Latest Courses</h2>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>

		<div class="row">
			<!-- single blog post -->
            @foreach ($latestCourse as $latestCourses)
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img loading="lazy" src="/course_img/{{$latestCourses->image}}" alt="amazing caves coverimage" class="img-fluid" width="300" height="332">
					</div>

					<div class="content">
						<h3><a href="">{{$latestCourses->title}}</a></h3>
						<p>{{$latestCourses->description}}</p>
						<a class="btn btn-main" href="">Registresion</a>
					</div>
				</div>
			</article>
            @endforeach
			<!-- /single blog post -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section>



@endsection
