@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Project Income</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Project Income</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <section class="content">
<div class="container-fluid">
  <p>
    <a href="{{ route ('layouts.income.create') }}" class="btn btn-primary">Add New Record</a>
  </p>
  <table class="table table-border table-striped" id="example1">
    <thead>
    <tr>
                <th>S no</th>
                <th>Income From</th>
                <th>Income Detail</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Action</th>
    </tr>
    <thead>
      <tbody>
    @foreach($income as $income)
       <tr>
                <td>{{$income->incomes_id}}</td>
                <td>{{$income->income_from}}</td>
                <td>{{$income->income_detail}}</td>
                <td>{{$income->amount}}</td>
                <td>{{$income->date}}</td>
                <td>
                  <a href="{{ route ('layouts.income.edit', $income->incomes_id) }}" class="btn btn-info">Edit</a>
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                  <form action="{{ route('layouts.income.destroy',$income->incomes_id) }}" method="post">@method('DELETE')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  </form>
                </td>

       </tr>

    @endforeach
    <tbody>
      <tfoot>
      <tr>
                <th>S no</th>
                <th>Income From</th>
                <th>Income Detail</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Action</th>
    </tr>
  </tfoot>
  </table>
</div>
</section>
@endsection