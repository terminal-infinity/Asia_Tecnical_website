@extends('admin.admin_dashboard')

@section('content')
<style type="text/css">
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }
    h1{
        color: white;
    }
    label{
        display: inline-block;
        width: 200px;
        font-size: 18px!important;
        color: white!important;
    }
    input[type='text']{
        width: 400px;
        height: 50px;
    }
    textarea{
        width: 450px;
        height: 80px;
    }
    .input_deg{
        padding: 15px;
    }
</style>
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
            <form class="forms-sample" action="{{route('admin.edit_course',$data->id)}}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label">Course Category</label>
                    <select name="category" required>
                        <option value="{{$data->category}}">{{$data->category}}</option>
                        @foreach ($category as $category)
                            <option class="form-control" value="{{$category->category_name}}">{{$category->category_name}}
                            </option>
                            @endforeach
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Current Image</label>
                    <br>
                    <img width="150" src="/course_img/{{$data->image}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">New Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <input class="btn btn-success" type="submit" value="Update course" >
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection