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
              <h4 class="mb-3 mb-md-0">View Members</h4>
            </div>
        </div>
        <a href="{{ route('admin.add_member') }}" class="btn btn-primary">Add Member</a>
        <div class="page-header">
          <div class="container-fluid">
              <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Facebook URL</th>
                        <th>Linkedin URL</th>
                        <th>Instragram URL</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($member as $members)
                    <tr>
                        <td>{{$members->name}}</td>
                        <td>{{$members->designation}}</td>
                        <td>{{$members->fb_url}}</td>
                        <td>{{$members->tw_url}}</td>
                        <td>{{$members->in_url}}</td>
                        <td>
                            <img height="120" width="120" src="/member_img/{{$members->image}}">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.update_member',$members->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('admin.delete_member',$members->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                
          </div>
          </div> 
          
    </div>
</section>


@endsection