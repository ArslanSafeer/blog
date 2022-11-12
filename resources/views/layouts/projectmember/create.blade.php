@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add New Member</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add New Member</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <section class="content">
<div class="container-fluid">
  <form method="post" action="{{ route ('layouts.projectmember.store') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
           
            <label class="col-sm-3">Name</label>
            <div class="col-sm-12"><input type="text" name="name" class="form-control" placeholder="name"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Phone No</label>
            <div class="col-sm-12"><input type="text" name="phone_no" class="form-control" placeholder="Phone no"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Email</label>
            <div class="col-sm-12"><input type="text" name="email" class="form-control" placeholder="Email"></div>
            <div class="clearfix"></div>
            
      </div>
            <div class="form-group">
            <input type="submit" class="btn btn-info" value="save">
            </div>
    </form>
</div>
</section>
@endsection