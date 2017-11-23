@extends('layouts.app', ['pageName' => 'Expenses'])

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="active">Expenses</li>
    </ol>
@endsection

@section('section')
    <div class="panel panel-default">
        <div class="panel-heading">
            ALL EXPENSES
            <div class="panel-action">
                <a href="{{ route('expenses.create') }}" class="btn btn-primary">ADD EXPENSE</a>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>DATE</th>
                        <th>DESCRIPTION</th>
                        <th>AMOUNT</th>
                        <th>% FELIPE</th>
                        <th>% KARINE</th>
                        <th>R$ FELIPE</th>
                        <th>R$ KARINE</th>
                        <th>PAID BY</th>
                        <th class="text-center">MANAGE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>09/06/2017</td>
                        <td>Casas Bahia (3/5)</td>
                        <td>R$ 474,86</td>
                        <td>27,65%</td>
                        <td>72,35%</td>
                        <td>R$ 131,30</td>
                        <td>R$ 343,56</td>
                        <td>Karine</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>09/06/2017</td>
                        <td>Casas Bahia (3/5)</td>
                        <td>R$ 474,86</td>
                        <td>27,65%</td>
                        <td>72,35%</td>
                        <td>R$ 131,30</td>
                        <td>R$ 343,56</td>
                        <td>Karine</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>09/06/2017</td>
                        <td>Casas Bahia (3/5)</td>
                        <td>R$ 474,86</td>
                        <td>27,65%</td>
                        <td>72,35%</td>
                        <td>R$ 131,30</td>
                        <td>R$ 343,56</td>
                        <td>Karine</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection