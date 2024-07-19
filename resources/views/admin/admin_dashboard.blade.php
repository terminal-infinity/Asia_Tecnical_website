<!DOCTYPE html>

<html lang="en">
@include('admin.partials.head')
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		@include('admin.partials.sidebar')
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
      @include('admin.partials.navbar')
			<!-- partial -->
        
		@yield('content')

			<!-- partial:partials/_footer.html -->
      @include('admin.partials.footer')
			<!-- partial -->
		
		</div>
	</div>

	@include('admin.partials.scripts')

  @include('admin.partials.message.toaster')

</body>
</html>    