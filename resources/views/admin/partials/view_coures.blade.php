@extends('admin.admin_dashboard')

@section('content')

<style>
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }
    .container {
        padding: 2rem 0rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
        vertical-align: middle;
        justify-content: center;
        align-items: center;
  }
}
</style>
<!-- Sidebar Navigation end-->
<section>
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div class="mb-5">
              <h4 class="mb-3 mb-md-0">View Course</h4>
            </div>
        </div>
        <a href="{{ route('admin.add_course') }}" class="btn btn-primary">Add Course</a>
        <div class="container">
            <div class="row">
              <div class="col-12">
              <table class="table table-image table-hover">
                <thead>
                  <tr>
                    <th scope="col">Course Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($course as $courses)
                  <tr>
                    <td scope="row">{{$courses->title}}</td>
                        <td scope="row">{!!Str::limit($courses->description,50)!!}</td>
                        <td scope="row">{{$courses->category}}</td>
                        <td>
                            <img height="120" width="120" src="/course_img/{{$courses->image}}">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.update_course',$courses->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('admin.delete_course',$courses->id) }}" id="delete">Delete</a>
                        </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>   
              </div>
            </div>
          </div>
    </div>
</section>


@endsection