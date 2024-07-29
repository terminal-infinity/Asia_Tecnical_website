@extends('admin.admin_dashboard')

@section('content')

<style>
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }
    .table_deg{
        border: 2px solid lightblue;
    }
    th{
        background-color: lightseagreen;
        color: white;
        font-size: 19px;
        font-weight: bold;
        padding: 15px;
    }
    td{
        border: 2px solid lightblue;
        text-align: center;
        color: white;
    }
    input[type='search']{
        width: 500px;
        height: 50px;
        margin-left: 50px;
    }
</style>
<!-- Sidebar Navigation end-->
<section>
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div class="mb-5">
              <h4 class="mb-3 mb-md-0">View Services</h4>
            </div>
        </div>
        <a href="{{ route('admin.add_service') }}" class="btn btn-primary">Add Service</a>
        <div class="page-header">
          <div class="container-fluid">
              <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($service as $services)
                    <tr>
                        <td>{{$services->title}}</td>
                        <td>{!!Str::limit($services->description,50)!!}</td>
                        <td>
                            <img height="120" width="120" src="/service_img/{{$services->image}}">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.delete_service',$services->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('admin.delete_service',$services->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                
          </div>
          </div> 
          
    </div>
</section>


@endsection