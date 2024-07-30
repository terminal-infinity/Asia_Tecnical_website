@extends('admin.admin_dashboard')

@section('content')

<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="mb-5">
          <h2 class="mb-3 mb-md-0">Add Member</h2>
        </div>
    </div>

    <div class="col-md-7 col-xl-12 middle-wrapper">
        <div class="row">
         <div class="card">
        <div class="card-body">
            <form class="forms-sample" action="{{route('admin.upload_member')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input  type="text" name="name" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Facebook URL</label>
                    <input type="text" name="fb_url" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Instragram URL</label>
                    <input type="text" name="in_url" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Linkedin URL</label>
                    <input type="text" name="tw_url" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <input class="btn btn-success" type="submit" value="Add Member" >
            </form>
        </div>
      </div>
    </div>
</div>


   
@endsection