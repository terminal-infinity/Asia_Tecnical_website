@extends('front.layouts.app')

@section('main')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>About Us</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">About Us</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="blog" id="blog">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center ">
					<h2> Courses</h2>
					<div class="border"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
				</div>
			</div>
			<!-- /section title -->
		</div>

		<div class="row">
			<!-- single blog post -->
            @foreach ($course as $courses)
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						@if ($courses->image != '')
						<img loading="lazy" src="/course_img/{{$courses->image}}" alt="amazing caves coverimage" class="img-fluid" width="300" height="332">
						@endif
					</div>

					<div class="content">
						<h3><a href="">{{$courses->title}}</a></h3>
						<p>{{$courses->description}}</p>
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