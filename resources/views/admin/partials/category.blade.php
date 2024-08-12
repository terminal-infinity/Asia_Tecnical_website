@extends('admin.admin_dashboard')

@section('content')
<style type="text/css">
    input[type='text']{
        width: 500px;
        height: 40px;
    }
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px;
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
        padding: 1rem 5rem;
  }
}
</style>
<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="mb-5">
          <h4 class="mb-3 mb-md-0">Add Category</h4>
        </div>
    </div>
    <div class="page-header">
      <div class="container-fluid">
      <div class="div_deg">
      <form action="{{ route('admin.add_category') }}" method="post">
        @csrf
        <div>
            <input type="text" name="category" required>
            <input class="btn btn-primary" type="submit" value="Add Category">
        </div>
      </form>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12">
          <table class="table table-image table-hover">
            <thead>
              <tr>
                <th scope="col">Category Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $data as $data )
              <tr>
                <td scope="row">{{$data->category_name}}</td>
                <td>
                  <a class="btn btn-success" href="{{route('admin.edit_category',$data->id)}}">Edit</a>
                </td>
                <td>
                  <a class="btn btn-danger"  href="{{route('admin.delete_category',$data->id)}}" id="delete">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>   
          </div>
        </div>
      </div>
      
      
      </div> 
  </div>
</div>
@endsection