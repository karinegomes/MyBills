@extends('layouts.app', ['pageName' => 'Family members'])

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="active">Family members</li>
    </ol>
@endsection

@section('section')
    <list-family-members></list-family-members>
@endsection