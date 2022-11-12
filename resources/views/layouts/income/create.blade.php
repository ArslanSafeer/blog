@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add New Record</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add New Record</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <section class="content">
<div class="container-fluid">
  <form method="post" action="{{ route ('layouts.income.store') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
           
            <label class="col-sm-3">Income From</label>
            <div class="col-sm-12"><input type="text" name="income_from" class="form-control" placeholder="Income from"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Income Detail</label>
            <div class="col-sm-12"><input type="text" name="income_detail" class="form-control" placeholder="Income Detail"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Amount</label>
            <div class="col-sm-12"><input type="text" name="amount" class="form-control" placeholder="Amount"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Date</label>
            <div class="col-sm-12"><input type="date" name="date" class="form-control" placeholder="Date"></div>
            <div class="clearfix"></div>
               
      </div>
            <div class="form-group">
            <input type="submit" class="btn btn-info" value="save">
            </div>
    </form>
</div>
</section>
@endsection