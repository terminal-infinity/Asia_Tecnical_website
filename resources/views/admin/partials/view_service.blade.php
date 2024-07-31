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
              <h4 class="mb-3 mb-md-0">View Services</h4>
            </div>
        </div>
        <a href="{{ route('admin.add_service') }}" class="btn btn-primary">Add Service</a>

        <div class="container">
            <div class="row">
              <div class="col-12">
              <table class="table table-image table-hover">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($service as $services)
                  <tr>
                    <td scope="row">{{$services->title}}</td>
                    <td scope="row">{!!Str::limit($services->description,50)!!}</td>
                    <td>
                        <img height="120" width="120" src="/service_img/{{$services->image}}">
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.update_service',$services->id) }}">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('admin.delete_service',$services->id) }}" id="delete">Delete</a>
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