@extends('admin.admin_dashboard')

@section('content')
<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="mb-5">
          <h2 class="mb-3 mb-md-0">Update Service</h2>
        </div>
    </div>

    <div class="col-md-7 col-xl-12 middle-wrapper">
        <div class="row">
         <div class="card">
        <div class="card-body">
            <form class="forms-sample" action="{{route('admin.edit_service',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input  type="text" name="title" class="form-control" value="{{$data->title}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$data->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Current Image</label>
                    <br>
                    <img width="150" src="/service_img/{{$data->image}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">New Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <input class="btn btn-success" type="submit" value="Update Service" >
            </form>
        </div>
      </div>
    </div>
@endsection