@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add New User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add New User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <section class="content">
<div class="container-fluid">
  <form method="post" action="{{ route ('layouts.projectuser.store') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
           
            <label class="col-sm-3">User Name</label>
            <div class="col-sm-12"><input type="text" name="user_name" class="form-control" placeholder="User name"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">User Email</label>
            <div class="col-sm-12"><input type="email" name="user_email" class="form-control" placeholder="User email"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
               
              <div class="col-sm-12">
                        <label for=""><b>Project:</b></label>
                        <select name="projects_id" class="form-control">
                           <option value="">--Choose--</option>
                           @foreach($project as $pro)
                           <option value="{{ $pro->projects_id }}">{{ $pro->name }}</option>    
                           @endforeach
                            
                        </select></div>
            <div class="clearfix"></div>   
      </div>

            <div class="form-group">
            <input type="submit" class="btn btn-info" value="save">
            </div>
    </form>
</div>
</section>
@endsection