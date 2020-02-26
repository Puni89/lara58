@extends('layouts.app')

@section('title')
   Costomer List    
@endsection

@section('content')


<h1 class="text-center">List Of Customers</h1>
<a href="customer/create" class="btn btn-warning pull-right">Create Customer</a>

  
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Company</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
        <tr>
            <th scope="row">1</th>
        <td><a href="/customer/{{ $customer->id }}">{{ $customer->name }}</a></td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->company->name }}</td>
            <td>{{ $customer->status  }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>



@endsection