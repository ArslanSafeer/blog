@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Project Detail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Project Detail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <section class="content">
<div class="container-fluid">
  <p>
    <a href="{{ route ('layouts.projectdetail.create') }}" class="btn btn-primary">Add Project Detail</a>
  </p>


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

  
  <table class="table table-border table-striped" id="example1">
    <thead>
    <tr>
                <th>S no</th>
                <th>Date</th>
                <th>Attended by</th>
                <th>Detail</th>
                <th>Project</th>
                <th>Action</th>
                <th>Upload Image</th>
                <th>view Image</th>
    </tr>
    <thead>
      <tbody>
    @foreach($projectdetail as $projectdetail)
       <tr>
                <td>{{$projectdetail->projectdetails_id}}</td>
                <td>{{$projectdetail->date}}</td>
                <td>{{$projectdetail->attended_by}}</td>
                <td>{{$projectdetail->detail}}</td>
                <td>{{$projectdetail->projectdetail->name}}</td>
                <td>
                  <a href="{{ route ('layouts.projectdetail.edit', $projectdetail->projectdetails_id) }}" class="btn btn-info">Edit</a>
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                  <form action="{{ route('layouts.projectdetail.destroy',$projectdetail->projectdetails_id) }}" method="post">@method('DELETE')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  </form>
                </td>
                  <td>
                  <a href="{{ route('products.show', $projectdetail->projectdetails_id) }}" class="btn btn-info">Upload Image</a>
                </td>
                  <td>
                  <a href="{{ route ('products.showall', $projectdetail->projectdetails_id) }}" class="btn btn-info">View image</a>
                </td>
                

       </tr>

    @endforeach
    </tbody>
      <tfoot>
      <tr>
                <th>S no</th>
                <th>Date</th>
                <th>Attended by</th>
                <th>Detail</th>
                <th>Project Id</th>
                <th>Action</th>
                <th>Upload Image</th>
                <th>view Image</th>
    </tr>
    <tfoot>
  </table>
</div>
</section>
@endsection