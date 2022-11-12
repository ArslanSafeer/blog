@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Record</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Record</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <section class="content">
<div class="container-fluid">
  <form method="post" action="{{ route ('layouts.projectmember.update', $projectmember->projectmembers_id) }}">
    @method('PUT')
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
           
            <label class="col-sm-3">Name</label>
            <div class="col-sm-12"><input type="text" name="name" class="form-control" placeholder="Name" value="{{ $projectmember->name }}"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Phone no</label>
            <div class="col-sm-12"><input type="text" name="phone_no" class="form-control" placeholder="Phone no" value="{{ $projectmember->phone_no }}"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Email</label>
            <div class="col-sm-12"><input type="text" name="email" class="form-control" placeholder="Email" value="{{ $projectmember->email }}"></div>
            <div class="clearfix"></div>
            
      </div>

            <div class="form-group">
            <input type="submit" class="btn btn-info" value="save">
            </div>
    </form>
</div>
</section>
@endsection