
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

        <div class="col-md-7 col-xl-12 middle-wrapper">
            <div class="row">
             <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin.upload_image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Images</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <input class="btn btn-success" type="submit" value="Add Image" >
                </form>
            </div>
          </div>
        </div>


        <div class="m-5">
            <div class="row">
                <h2 class="m-4 ">Images</h2>
                <div class="mb-5">
                  @foreach ( $image as $img )
                  
                    <img width="150px" src="/gallary/{{$img->image}}" >
                    <a class="btn btn-danger" href="{{ route('admin.delete_image',$img->id) }}" id="delete">Delete</a>
                    @endforeach
                </div>
            </div>
        </div>

        
        

    </div>
</section>
@endsection