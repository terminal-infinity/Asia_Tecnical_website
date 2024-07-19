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
    .table_deg{
      text-align: center;
      margin: auto;
      border: 2px solid rgba(110, 68, 165, 0.767);
      margin-top: 50px;
      width: 800px;
    }
    th{
      background-color: rgba(110, 68, 165, 0.767);
      padding: 15px;
      font-size: 20px;
      font-weight: bold;
      color: white;
    }
    td{
      color: white;
      padding: 10px;
      border: 1px solid rgba(110, 68, 165, 0.767);
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
            <input type="text" name="category">
        
            <input class="btn btn-primary" type="submit" value="Add Category">
        </div>
      </form>
      </div>

      <div>
        <table class="table_deg">
          <tr>
            <th>Category Name</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          @foreach ( $data as $data )
              <tr>
                <td>{{$data->category_name}}</td>
                <td>
                  <a class="btn btn-success" href="{{route('admin.edit_category',$data->id)}}">Edit</a>
                </td>
                <td>
                  <a class="btn btn-danger"  href="{{route('admin.delete_category',$data->id)}}">Delete</a>
                </td>
              </tr>
              @endforeach
        </table>
      </div>
      
      </div> 
  </div>
</div>
@endsection