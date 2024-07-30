@extends('admin.admin_dashboard')

@section('content')

<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="mb-5">
          <h4 class="mb-3 mb-md-0">Add Member</h4>
        </div>
    </div>

    <div class="col-md-7 col-xl-12 middle-wrapper">
        <div class="row">
         <div class="card">
        <div class="card-body">
            <form class="forms-sample" action="{{route('admin.edit_member',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input  type="text" name="name" class="form-control" value="{{$data->name}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control" value="{{$data->designation}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Facebook URL</label>
                    <input type="text" name="fb_url" class="form-control" value="{{$data->fb_url}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Instragram URL</label>
                    <input type="text" name="in_url" class="form-control" value="{{$data->in_url}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Linkedin URL</label>
                    <input type="text" name="tw_url" class="form-control" value="{{$data->tw_url}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Current Image</label>
                    <br>
                    <img width="150" src="/member_img/{{$data->image}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">New Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <input class="btn btn-success" type="submit" value="Update Member" >
            </form>
        </div>
      </div>
    </div>
    
@endsection