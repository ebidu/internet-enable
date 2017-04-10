@extends('layouts.app')

@section('content')

    {{--beginning of menu design--}}
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Tasks App</a>
            </div>
            <ul class="nav navbar-nav">
                <li ><a href="/">Home</a></li>
                <li class="active"><a href="/add">Add Task</a></li>
                <li><a href="/editView">Edit / Delete Task</a></li>
                <li><a href="/taskView">View All Task</a></li>
            </ul>
        </div>
    </nav>
    {{--Ending of menu design--}}

    <div class="row">
    <div class="col-md-4 col-md-offset-3">
        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('danger'))
            <div class="alert alert-danger">{{Session::get('danger')}}</div>
        @endif
        @if(Session::has('info'))
            <div class="alert alert-info">{{Session::get('info')}}</div>
        @endif
        @if(Session::has('warning'))
            <div class="alert alert-warning">{{Session::get('warning')}}</div>
        @endif
    </div>
    </div>
        <div class="row">

    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="jumbotron">
            <div class="panel panel-default">
                <div class="panel-body">

                    @include('errors.errors')

                    <form action="{{ url('task') }}" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Task</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="status">Status</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="status" name="status">
                                    <option>Completed</option>
                                    <option>Un-Completed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary btn-block">Add Task</button>
                            </div>
                        </div>

                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-1"></div>
        </div>

@endsection