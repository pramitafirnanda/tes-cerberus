@extends('layouts.base')
@section('content')
    {{ Form::open(['method' => 'post', 'route' => 'admin.store', 'class' => 'form-horizontal']) }}
        @include('admin.form')
    {{ Form::close() }}    
@endsection