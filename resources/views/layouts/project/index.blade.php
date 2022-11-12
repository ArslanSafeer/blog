@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html>
 <head>
 </head>
 <body>
  <br />
  <div class="container box">
 
   <div class="panel panel-default">
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Project</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Project</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="panel-body">
     <div class="form-group">
      <p>
    <a href="{{ route ('layouts.project.create') }}" class="btn btn-primary">Add New Project</a>
  </p>
     </div>

<form action="" method="get">
  @csrf
    <div class="form-group">
      <label for="">From Date:</label>
      <input type="date" name="datefrom">
      <label for="">To Date:</label>
      <input type="date" name="dateto">
      <input type="submit" value="Find">
  </div>
  </form>
  
     
     <div class="table-responsive">
      <table class="table table-bordered table-striped" id="example1">
       <thead>
        <tr>
        <th>S no</th>
         <th>Name</th>
         <th>Detail</th>
         <th>Start Date</th>
         <th>Parent</th>
         <th>Initiated by</th>
         <th>Current Initiated by</th>
         <th>Action</th>
         <th>Project Detail</th>
        </tr>
       </thead>
       <tbody>
        @foreach($projects as $project)
        <tr>
        <td>{{$project->projects_id}}</td>
        <td>{{$project->name}}</td>
        <td>{{$project->detail}}</td>
        <td>{{$project->started_date}}</td>
        <td>{{$project->project_parent->name}}</td>
        <td>
          @if(!is_null($project->project))
          {{$project->project->user_name}}
          @endif
        </td>
        <td>
          @if(!is_null($project->project))
          {{$project->project->user_name}}
          @endif
        </td>
        <td>
                  <a href="{{ route ('layouts.project.edit', $project->projects_id) }}" class="btn btn-info">Edit</a>
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                  <form action="{{ route('layouts.project.destroy',$project->projects_id) }}" method="post">@method('DELETE')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  </form>
                </td>
        <td>
                  <a href="{{ route ('layouts.projectdetail.create', $project->projects_id) }}" class="btn btn-info">Project Detail</a>
                </td>
      </tr>
        @endforeach
       </tbody>
       <tfoot>
       <tr>
        <th>S no</th>
         <th>Name</th>
         <th>Detail</th>
         <th>Start Date</th>
         <th>Parent</th>
         <th>Initiated by</th>
         <th>Current Initiated by</th>
         <th>Action</th>
         <th>Project Detail</th>
        </tr>
        <tfoot>
      </table>
     </div>
    </div>    
   </div>
  </div>
 </body>
</html>
@endsection