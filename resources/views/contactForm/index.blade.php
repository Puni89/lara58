@extends('layouts.app')

@section('title','Conatct US')
 

@section('content')
 
    
    @if (!session()->has('message'))
    {!! Form::open(['method'=>'post','action'=>'ContactFormController@store']) !!}
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
        {!! Form::label('message', 'Message') !!}
        {!! Form::textarea('message', null, ['class'=>'form-control']) !!}
        {!! $errors->first('message','<p class="text-danger">:message</p>') !!}
    </div>
    {!! Form::submit('Click me!!', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}        
    @endif    


@endsection