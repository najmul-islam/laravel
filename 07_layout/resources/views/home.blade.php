@extends('layout.adminlayout')
@section('title', 'Home')

@section('page-name')
    <h1>Home page</h1>
    <hr>
@endsection

@section('banner')
    <h2>This is home page banner</h2>
@endsection

@section('main')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, nostrum!
@endsection

@section('default-content')
    @parent
    <h2>This is home page text</h2>
@endsection
