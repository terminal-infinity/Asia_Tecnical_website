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

<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-4 mt-lg-0">
				<img loading="lazy" class="img-fluid" src="images/aboutus/ceo.jpg" alt="">
			</div>
			<div class="col-lg-6 mt-20">
				<h2 class="mb-3">Founder & CEO</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus
					dolor harum voluptatibus modi dicta ducimus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat
					cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas.
					Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam!
				</p>
			</div>
			
		</div>
	</div>
</section>

<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-20">
				<h2 class="mb-3">Vision & Mission</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus
					dolor harum voluptatibus modi dicta ducimus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat
					cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas.
					Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam!
				</p>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<img loading="lazy" class="img-fluid" src="images/aboutus/mission.jpg" alt="">
			</div>
		</div>
	</div>
</section>


<!-- <section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Our Mission</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores
					assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa
					inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia,
					perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
				<img loading="lazy" src="images/company/company-image-2.jpg" alt="" class="img-fluid mt-30">
			</div>
			<div class="col-md-6 mt-5 mt-md-0">
				<h3>Our Vision</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores
					assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa
					inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia,
					perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
				<img loading="lazy" src="images/company/company-image-3.jpg" alt="" class="img-fluid mt-30">
			</div>
		</div>
	</div>
</section> -->

<!-- Start Our Team-->
<section class="team" id="team">
			<div class="container">
				<div class="row justify-content-center">
					<!-- section title -->
					<div class="col-xl-6 col-lg-8">
						<div class="title text-center ">
							<h2>Our Management</h2>
							<div class="border"></div>
						</div>
					</div>
					<!-- /section title -->
				</div>
				<div class="row">
					<!-- team member -->
					@foreach ($member as $members)
					<div class="col-lg-4 col-md-6">
						<div class="team-member text-center">
							<div class="member-photo">
								<!-- member photo -->
								@if ($members->image != '')
								<img loading="lazy" class="img-fluid" src="/member_img/{{$members->image}}" width="300" height="332" alt="Meghna">
								@endif
								<!-- /member photo -->
		
								<!-- member social profile -->
								<div class="mask">
									@if ($members->fb_url != '' || $members->tw_url != '' || $members->in_url != '')
									<ul class="clearfix">
										@if ($members->fb_url != '')
										<li><a href="{{$members->fb_url}}"><i class="tf-ion-social-facebook"></i></a></li>
										@endif
										@if ($members->tw_url != '')
										<li><a href="{{$members->tw_url}}"><i class="tf-ion-social-twitter"></i></a></li>
										@endif
										@if ($members->in_url != '')
										<li><a href="{{$members->in_url}}"><i class="tf-ion-social-google-outline"></i></a></li>
										@endif
									</ul>
									@endif
								</div>
								<!-- /member social profile -->
							</div>
		
							<!-- member name & designation -->
							<div class="member-content">
								<h3>{{$members->name}}</h3>
								<span>{{$members->designation}}</span>
							</div>
							<!-- /member name & designation -->
		
						</div>
					</div>
					@endforeach
					<!-- end team member -->
				</div> <!-- End row -->
			</div> <!-- End container -->
</section> <!-- End section -->

<section class="section gallery">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2>Sneak Peak Gallery</h2>
						<div class="border"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="company-gallery">
					@foreach ( $image as $img )
					<img height="400" width="600" loading="lazy" src="/gallary/{{$img->image}}" alt="">
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

@endsection