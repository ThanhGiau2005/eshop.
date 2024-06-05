@extends('layout')

@section('title','page Child')

@section('sidebar')
@parent
This is layout child sidebar
@endsection

@section('content')
    <h1>Content of child</h1>
    @endsection