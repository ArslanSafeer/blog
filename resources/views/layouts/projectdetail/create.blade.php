@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Project Detail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Project Detail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <section class="content">
<div class="container-fluid">
  <form method="post" action="{{ route ('layouts.projectdetail.store') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
           
            <label class="col-sm-3">Date</label>
            <div class="col-sm-12"><input type="date" name="date" class="form-control" placeholder="date"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Attended By</label>
            <div class="col-sm-12"><input type="text" name="attended_by" class="form-control" placeholder="Attended by"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Detail</label>
            <div class="col-sm-12"><input type="text" name="detail" class="form-control" placeholder="Detail"></div>
            <div class="clearfix"></div>
            
      </div>
         <div class="form-group">
            
                          <label class="col-sm-3">Project</label>
                          <div class="col-sm-12">
                          <select name="projects_id" class="form-control" required="required">
                           <option value="">--Choose--</option>
                           @foreach($project as $pro)
                           <option value="{{ $pro->projects_id }}">{{ $pro->name }}</option>    
                           @endforeach                            
                           </select>
                           
            <div class="clearfix"></div>
            
      </div><br>
            <div class="form-group">
            <input type="submit" class="btn btn-info" value="save">
            </div>
    </form>
</div>
</section>
@endsection