@extends('admin.admin_dashboard')

@section('content')
<style>
    

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
              <h4 class="mb-3 mb-md-0">All Notices</h4>
            </div>
        </div>
        {{-- <a href="{{ route('admin.add_notice') }}" class="btn btn-primary">Add Notice</a> --}}

        <div class="col-md-7 col-xl-12 middle-wrapper">
            <div class="row">
             <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin.upload_notice') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input  type="text" name="title" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Document</label>
                        <input type="file" class="form-control" name="document">
                    </div>
                    <input class="btn btn-success" type="submit" value="Add Notice" >
                </form>
            </div>
          </div>
        </div>


        <div class="m-5">
            <div class="row">
                <h2 class="m-4 ">All Notice</h2>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">PDF</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($doc as $data)
                      <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->title}}</td>
                        <td >
                            <a class="btn btn-success" href="{{ route('admin.view',$data->id) }}">View</a>
                            <a class="btn btn-success" href="{{ route('admin.download',$data->id) }}">Download</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('admin.delete_notice',$data->id) }}" id="delete">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
            

    </div>
</section>
@endsection