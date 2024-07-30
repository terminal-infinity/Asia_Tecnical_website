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
              <h4 class="mb-3 mb-md-0">View Members</h4>
            </div>
        </div>
        <a href="{{ route('admin.add_member') }}" class="btn btn-primary">Add Member</a>

        <div class="container">
                <div class="row">
                  <div class="col-12">
                  <table class="table table-image table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Facebook URL</th>
                        <th scope="col">Linkedin URL</th>
                        <th scope="col">Instragram URL</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($member as $members)
                      <tr>
                        <td scope="row">{{$members->name}}</td>
                        <td scope="row">{{$members->designation}}</td>
                        <td scope="row">{{$members->fb_url}}</td>
                        <td scope="row">{{$members->tw_url}}</td>
                        <td scope="row">{{$members->in_url}}</td>
                        <td class="w-25">
                          <img height="120" width="120" src="/member_img/{{$members->image}}" alt="">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.update_member',$members->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('admin.delete_member',$members->id) }}" id="delete">Delete</a>
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