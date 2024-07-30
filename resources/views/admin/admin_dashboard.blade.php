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

    {{-- sweet alert --}}
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="{{ asset('backend/assets/js/code/code.js') }}"></script>
</body>
</html>    