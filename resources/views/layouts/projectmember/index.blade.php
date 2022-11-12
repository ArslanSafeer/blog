@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Project Member</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Project Member</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <section class="content">
<div class="container-fluid">
  <p>
    <a href="{{ route ('layouts.projectmember.create') }}" class="btn btn-primary">Add Member</a>
  </p>
  <table class="table table-border table-striped" id="example1">
    <thead>
    <tr>
                <th>S no</th>
                <th>Name</th>
                <th>Phone no</th>
                <th>Email</th>
                <th>Action</th>
    </tr>
    <thead>
       <tbody>
    @foreach($projectmember as $projectmember)
       <tr>
                <td>{{$projectmember->projectmembers_id}}</td>
                <td>{{$projectmember->name}}</td>
                <td>{{$projectmember->phone_no}}</td>
                <td>{{$projectmember->email}}</td>
                <td>
                  <a href="{{ route ('layouts.projectmember.edit', $projectmember->projectmembers_id) }}" class="btn btn-info">Edit</a>
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                  <form action="{{ route('layouts.projectmember.destroy',$projectmember->projectmembers_id) }}" method="post">@method('DELETE')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  </form>
                </td>

       </tr>

    @endforeach
    </tbody>
    <tfoot>
      <tr>
                <th>S no</th>
                <th>Name</th>
                <th>Phone no</th>
                <th>Email</th>
                <th>Action</th>
    </tr>
  </tfoot>
  </table>
</div>
</section>
@endsection