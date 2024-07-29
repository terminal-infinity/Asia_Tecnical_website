@extends('front.layouts.app')

@section('main')
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Service</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$service->title}}</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-20">
				<h2 class="mb-3">{{$service->title}}</h2>
				<p>{{$service->description}}</p>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<img loading="lazy" class="img-fluid" src="/service_img/{{$service->image}}" alt="">
			</div>
		</div>
	</div>
</section>
@endsection