@extends('admin.admin_dashboard')

@section('content')

<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="mb-5">
          <h4 class="mb-3 mb-md-0">Add Course</h4>
        </div>
    </div>

    <div class="col-md-7 col-xl-12 middle-wrapper">
        <div class="row">
         <div class="card">
        <div class="card-body">
            <form class="forms-sample" action="{{route('admin.upload_course')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Course Title</label>
                    <input  type="text" name="title" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Course Category</label>
                    <select name="category" required>
                        <option class="form-control">Select a Option</option>
                        @foreach ($category as $category)
                            <option class="form-control" value="{{$category->category_name}}">{{$category->category_name}}
                            </option>
                            @endforeach
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <input class="btn btn-success" type="submit" value="Add course" >
            </form>
        </div>
      </div>
    </div>
@endsection