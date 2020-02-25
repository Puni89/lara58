@extends('layouts.layout')

@section('title')
   Costomer List    
@endsection

@section('content')

{!! Form::open(['method'=>'post','action'=>'CustomersController@store']) !!}
    <div class="form-group">
        {!! Form::label("name", 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}   
        {!! $errors->first('name', '<p class="text-danger">:message</p>') !!}
    </div>
    <div class="form-group">
        {!! Form::label("email", 'Email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}   
        {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
    </div>
    <div class="form-group">      
        {!! Form::label("status", 'Status') !!}
       {!! Form::select('status', [''=>'Selct Any one of them', 1=>'Active',0=>'Inactive'], '', ['class' => 'form-control']) !!}
        {!! $errors->first('status', '<p class="text-danger">:message</p>') !!}
    </div>
    {!! Form::submit('Click me!!', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
<hr>
<h1 class="text-center">List Of Customers</h1>
<div class="row">
    <div class="col-sm-6">
    <ul>
        <h3>Active </h3>
        @foreach( $activeCustomer as $item )
        <li>{{ $item->name }} -*- {{ $item->email }} </li>    
        @endforeach
        </ul>
    <ul>
</div>
<div class="col-sm-6">
<ul>
    <h4>Inactive </h4>
@foreach( $inActiveCustomer as $item )
<li>{{ $item->name }} -*- {{ $item->email }}</li>    
@endforeach
</ul>
</div>
</div>



@endsection