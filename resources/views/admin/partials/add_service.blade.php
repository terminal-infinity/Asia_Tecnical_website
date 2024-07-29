@extends('admin.admin_dashboard')

@section('content')
<style type="text/css">
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }
    h1{
        color: white;
    }
    label{
        display: inline-block;
        width: 200px;
        font-size: 18px!important;
        color: white!important;
    }
    input[type='text']{
        width: 400px;
        height: 50px;
    }
    textarea{
        width: 450px;
        height: 80px;
    }
    .input_deg{
        padding: 15px;
    }
</style>
<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="mb-5">
          <h4 class="mb-3 mb-md-0">Add Service</h4>
        </div>
    </div>
    <div class="page-header">
      <div class="container-fluid">

      <div class="div_deg">
        <form action="{{ route('admin.upload_service') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input_deg">
                <label>Title</label>
                <input type="text" name="title" required>
            </div>
            <div class="input_deg">
                <label>Description</label>
                <textarea name="description"></textarea>
            </div>
            
            <div class="input_deg">
                <label>Image</label>
                <input type="file" name="image" >
            </div>
            <div class="input_deg">
                <input class="btn btn-success" type="submit" value="Add Service" >
            </div>
            
        </form>
      </div>

      </div> 
  </div>
@endsection