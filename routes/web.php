<?php

use App\Task;
use illuminate\Http\Request;


Route::get('/', function () {
    $tasks = Task::orderBy('created_at','asc')->get();

    return view('welcome');
});

Route::get('/add', function () {
    $tasks = Task::orderBy('created_at','asc')->get();

    Session::flash('info',' Add a task');
    return view('tasks.index',[
        'tasks'=>$tasks
    ]);
});


Route::get('/editView', function () {
    $tasks = Task::orderBy('created_at','asc')->get();

    Session::flash('info', ' task ready for update');
    return view('edit_task',[
        'tasks'=>$tasks
    ]);
});

Route::get('/taskView', function () {
    $tasks = Task::orderBy('created_at','asc')->get();

    Session::flash('info', ' task ready for update');

    return view('view_task',[
        'tasks'=>$tasks
    ]);
});





Route::post('/task', function(Request $request){

    $validator = Validator::make($request->all(),[
        'name' => 'required|max:255',
        'status' => 'required|max:255'
    ]);


    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->status = $request->status;
    $task->save();

    Session::flash('success',' new task created');

//    Task::create([
//       'name'=>$request->name,
//    ]);

    return redirect('/');

});
//Route::edit('/task/{}',function (Task $task){
//   $task->();
//
//});

Route::delete('/task/{task}', function(Task $task){

    $task->delete();

    Session::flash('danger',' task deleted');
    return redirect('/');
});
