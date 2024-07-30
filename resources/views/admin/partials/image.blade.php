@extends('admin.admin_dashboard')

@section('content')
<style type="text/css">
    input[type='file']{
        width: 500px;
        height: 30px;
        background: #1e2236;
        margin: 5px;
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
          <h4 class="mb-3 mb-md-0">Add Images</h4>
        </div>
    </div>
    <div class="page-header">
      <div class="container-fluid">
      <div class="div_deg">
      <form action="{{ route('admin.upload_image') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" name="image">
        
            <input class="btn btn-primary" type="submit" value="Add Image">
        </div>
      </form>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12">
          <table class="table table-image table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $image as $img )
              <tr>
                <td scope="row">{{$img->id}}</td>
                <td class="w-25">
                  <img height="120" width="120" src="/gallary/{{$img->image}}" alt="">
                </td>
                <td>
                  <a class="btn btn-danger"  href="{{ route('admin.delete_image',$img->id) }}" id="delete">Delete</a>
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