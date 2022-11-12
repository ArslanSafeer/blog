@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Project User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Project User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <section class="content">
<div class="container-fluid">
  <p>
    <a href="{{ route ('layouts.projectuser.create') }}" class="btn btn-primary">Add New User</a>
  </p>
  <table class="table table-border table-striped" id="example1">
    <thead>
    <tr>
                <th>S no</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Project Name</th>
                <th>Action</th>
    </tr>
    </thead>
      <tbody>
    @foreach($projectuser as $projectuser)
       <tr>
                <td>{{$projectuser->projectusers_id}}</td>
                <td>{{$projectuser->user_name}}</td>
                <td>{{$projectuser->user_email}}</td>
                <td>{{$projectuser->projectuser->name}}</td>
                <td>
                  <a href="{{ route ('layouts.projectuser.edit', $projectuser->projectusers_id) }}" class="btn btn-info">Edit</a>
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                  <form action="{{ route('layouts.projectuser.destroy',$projectuser->projectusers_id) }}" method="post">@method('DELETE')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  </form>
                </td>

       </tr>

    @endforeach
    </tbody>
    <tfoot>
    <tr>
                <th>S no</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Action</th>
    </tr>
    </tfoot>
  </table>
</div>
</section>
@endsection