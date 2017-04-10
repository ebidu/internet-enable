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
                <li><a href="/add">Add Task</a></li>
                <li><a href="/editView">Edit / Delete Task</a></li>
                <li class="active"><a href="/taskView">View All Task</a></li>
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
    </div></div>

    <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="jumbotron">
            @if($tasks->count())
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tasks
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <th>No.</th>
                            <th>Task Name</th>
                            <th>Status</th>
                            <th>Created</th>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->name}}</td>
                                <td>{{$task->status}}</td>
                                <td>{{$task->created_at}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            @else
            {{'No Records Found'}}
            @endif
        </div>
    </div>
    <div class="col-sm-1"></div>
    </div>
@endsection