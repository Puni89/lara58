@extends('layouts.app')

@section('title')
   Costomer List    
@endsection

@section('content')


<h1 class="text-center">List Of Customers</h1>


  
  <table class="table">
     <tbody>
         <tr>
             <th>Name</th>
         <td>{{ $customer->name}}</td>
         </tr>
         <tr>
            <th>Email</th>
        <td>{{ $customer->email}}</td>
        </tr>
        <tr>
            <th>Comapny</th>
        <td>{{ $customer->company->name}}</td>
        </tr>
        <tr>
            <th>Status</th>
        <td>{{ $customer->status}}</td>
        </tr>
     </tbody>
  </table>
 {!! Form::open(['method'=>'DELETE','action'=>['CustomersController@destroy',$customer->id]]) !!} 

 {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
 {!! Form::close() !!}
  
<a href="/customer/{{$customer->id}}/edit" class="btn btn-warning pull-right">Edit Customer</a>



@endsection