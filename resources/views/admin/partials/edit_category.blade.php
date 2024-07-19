@extends('admin.admin_dashboard')

@section('content')
<style type="text/css">
    input[type='text']{
        width: 400px;
        height: 50px;
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
      border: 2px solid green;
      margin-top: 50px;
      width: 600px;
    }
    th{
      background-color: blue;
      padding: 15px;
      font-size: 20px;
      font-weight: bold;
      color: white;
    }
    td{
      color: white;
      padding: 10px;
      border: 1px solid lightseagreen;
    }
</style>
<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
      
        <h1 style="color: white;">Update Category</h1>
        <div class="div_deg">
        <form action="{{route('admin.update_category',$data->id)}}" method="post">
          @csrf
          <div>
              <input type="text" name="category" value="{{$data->category_name}}">
          
              <input class="btn btn-primary" type="submit" value="Update Category">
          </div>
        </form>
        </div>
      
      </div> 
  </div>
</div>
@endsection