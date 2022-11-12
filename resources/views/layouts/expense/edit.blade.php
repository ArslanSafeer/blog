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
  <form method="post" action="{{ route ('layouts.expense.update', $expense->expenses_id) }}">
    @method('PUT')
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
           
            <label class="col-sm-3">Expense From</label>
            <div class="col-sm-12"><input type="text" name="expense_from" class="form-control" placeholder="Expense from" value="{{ $expense->expense_from }}"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Expense For</label>
            <div class="col-sm-12"><input type="text" name="expense_for" class="form-control" placeholder="Expense for" value="{{ $expense->expense_for }}"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Amount</label>
            <div class="col-sm-12"><input type="text" name="amount" class="form-control" placeholder="Amount" value="{{ $expense->amount }}"></div>
            <div class="clearfix"></div>
            
      </div>
      <div class="form-group">
            
            <label class="col-sm-3">Date</label>
            <div class="col-sm-12"><input type="date" name="date" class="form-control" placeholder="Date" value="{{ $expense->date }}"></div>
            <div class="clearfix"></div>   
      </div>

            <div class="form-group">
            <input type="submit" class="btn btn-info" value="save">
            </div>
    </form>
</div>
</section>
@endsection