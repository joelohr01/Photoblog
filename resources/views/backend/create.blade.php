@extends('layouts.app')

@include('partials.navbar')

@section('content')
    <h1>Create a New Post</h1>
    {!! Form::open(array('action', 'AdminController@store')) !!}
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Create New Post</h3>
                </div>
                <div class="panel-body">
                    <fieldset>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" name="title" type="text">
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control" name="body"></textarea>
                        </div>
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Submit">
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection