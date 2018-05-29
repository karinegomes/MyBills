@extends('layouts.app', ['pageName' => 'Periods'])

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="active">Periods</li>
    </ol>
@endsection

@section('section')
    <list-periods></list-periods>
@endsection

@section('js')
    <script src="{{ asset('plugins/bower_components/moment/min/moment.min.js') }}"></script>
@endsection