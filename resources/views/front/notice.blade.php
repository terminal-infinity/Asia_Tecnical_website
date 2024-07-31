@extends('front.layouts.app')

@section('main')
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Notice</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Notice</li>
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
					<h2>Notice</h2>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>

		
        <div class="row">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Notice</th>
                    <th scope="col">PDF</th>
                  </tr>
                </thead>
                <tbody>
					@foreach ($document as $data)
					<tr>
						<th scope="row">{{$data->id}}</th>
						<td>{{$data->title}}</td>
						<td>
							<a class="btn btn-danger" href="{{ route('admin.download',$data->id) }}">Download
								<i class="fa-solid fa-file-pdf" ></i>
							</a>
						</td>
					</tr>
					@endforeach
                </tbody>
              </table>
        </div>
	</div> <!-- end container -->
</section>

@endsection