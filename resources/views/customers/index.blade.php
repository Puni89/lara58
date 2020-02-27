@extends('layouts.app')

@section('title')
   Costomer List    
@endsection

@section('content')


<h1 class="text-center">List Of Customers</h1>
<a href="{{ route('customer.create') }}" class="btn btn-warning pull-right">Create Customer</a>

  
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Company</th>
        <th scope="col">Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
         <?php 
           $sn = 1;
          ?>
        @foreach ($customers as $customer)
        <tr>
        <th scope="row">{{ $sn++ }}</th>
        <td><a href="{{ route('customer.show',['customer'=>$customer]) }}">{{  $customer->name   }}</a></td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->company->name }}</td>
            <td>{{ $customer->status  }}</td>
            <td>
              
              {!! Form::open(['method'=>'DELETE','action'=>['CustomersController@destroy',$customer]]) !!}
              {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>



@endsection