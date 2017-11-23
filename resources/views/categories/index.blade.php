@extends('layouts.app', ['pageName' => 'Categories'])

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="active">Categories</li>
    </ol>
@endsection

@section('section')
    <div class="panel panel-default">
        <div class="panel-heading">
            ALL CATEGORIES
            <div class="panel-action">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">ADD CATEGORY</a>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>NAME</th>
                        <th class="text-center">MANAGE</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td class="text-center">
                                <a href="{{ route('categories.edit', $category) }}"
                                   class="btn btn-info btn-outline btn-circle btn-lg m-r-5">
                                    <i class="ti-pencil-alt"></i>
                                </a>
                                <button type="button"
                                        class="btn btn-info btn-outline btn-circle btn-lg m-r-5 delete-category">
                                    <i class="ti-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link href="{{ url('plugins/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endpush

@push('js')
    <script src="{{ asset('plugins/bower_components/sweetalert/sweetalert.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('.delete-category').on('click', function() {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    closeOnConfirm: false
                }, function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: '/test',
                            success: function (response) {
                                console.log(response);
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush