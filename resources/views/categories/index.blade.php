@extends('layouts.app', ['pageName' => 'Categories'])

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="active">Categories</li>
    </ol>
@endsection

@section('section')
    <list-categories></list-categories>
@endsection