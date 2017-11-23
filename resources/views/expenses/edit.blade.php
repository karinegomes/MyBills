@extends('layouts.app', ['pageName' => 'Expenses'])

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li><a href="{{ route('expenses.index') }}">Expenses</a></li>
        <li class="active">{{ $expense->id ? 'Edit expense' : 'Add expense' }}</li>
    </ol>
@endsection

@section('section')
    <div class="panel panel-default">
        <div class="panel-heading">
            ADD EXPENSE
        </div>
        <div class="panel-body">
            <form method="POST" action="#">
                {{ csrf_field() }}

            </form>
        </div>
    </div>
@endsection