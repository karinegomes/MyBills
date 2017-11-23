@extends('layouts.app', ['pageName' => 'Categories'])

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li><a href="{{ route('categories.index') }}">Categories</a></li>
        <li class="active">{{ $category->id ? 'Edit category' : 'Add category' }}</li>
    </ol>
@endsection

@section('section')
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form method="POST"
                          action="{{ $category->id ? route('categories.update', $category) : route('categories.store') }}">
                        {{ csrf_field() }}

                        @if($category->id)
                            {{ method_field('PUT') }}
                        @endif

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">Name</label>
                                    <input name="name" class="form-control" id="name"
                                           value="{{ old('name', $category->name) }}">
                                    @if ($errors->has('name'))
                                        <small class="help-block">
                                            {{ $errors->first('name') }}
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection