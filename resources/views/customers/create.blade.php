@extends('layouts.app')

@section('title')
  Add new Customers 
@endsection

@section('content')
     <h3>Add new Customers </h3>
     <a href="/customer" class="btn btn-default pull-right">All Customer</a>

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
        {!! Form::label("company_id", 'Company') !!}
       {!! Form::select('company_id', [''=>'Choose Company'] + $company, null, ['class' => 'form-control']) !!}
       

        {!! $errors->first('company_id', '<p class="text-danger">:message</p>') !!}
    </div>
    <div class="form-group">      
        {!! Form::label("status", 'Status') !!}
       {!! Form::select('status', [''=>'Selct Any one of them', 1=>'Active',0=>'Inactive'], '', ['class' => 'form-control']) !!}
        {!! $errors->first('status', '<p class="text-danger">:message</p>') !!}
    </div>
    {!! Form::submit('Click me!!', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
<hr>
@endsection