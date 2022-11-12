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
  <form method="post" action="{{ route ('layouts.project.update', $project->projects_id) }}">
    @method('PUT')
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
           
            <label class="col-sm-3">Name</label>
            <div class="col-sm-12"><input type="text" name="name" class="form-control" placeholder="Name" value="{{ $project->name }}"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Detail</label>
            <div class="col-sm-12"><input type="text" name="detail" class="form-control" placeholder="Detail" value="{{ $project->detail }}"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Start date</label>
            <div class="col-sm-12"><input type="date" name="started_date" class="form-control" placeholder="Start date" value="{{ $project->started_date }}"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Parent Id</label>    
              <div class="col-sm-12"><select name="parent_id" class="form-control" value="{{ $project->parent_id }}" required="required">
                <option value="Select">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">2</option>
                <option value="4">3</option>
              </select></div>
            <div class="clearfix"></div>   
      </div>

            <div class="form-group">
            
                           <label class="col-sm-3">Initiated By </label>
                           <div class="col-sm-12"><select name="initiated_by_id" class="form-control" required="required">
                           <option value="">--Choose--</option>
                           @foreach($projectuser as $project)
                           <option value="{{ $project->projectusers_id }}">{{ $project->user_name }}</option>    
                           @endforeach
                           </select></div>
                       <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
                           <label class="col-sm-3">Current Initiated By</label>
                           <div class="col-sm-12"><select name="current_initiated_by" class="form-control" required="required">
                           <option value="">--Choose--</option>
                           @foreach($projectuser as $project)
                           <option value="{{ $project->projectusers_id }}">{{ $project->user_name }}</option>    
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