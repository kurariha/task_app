<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // indexページ
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        $task = new Task;

        $task->title = $request->title;
        $task->body = $request->body;
        $task->save();
        
        //登録したらindexを再読み込み
        return redirect('/tasks');
    }

    // showページへ移動
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        $task->title = $request->title;
        $task->body = $request->body;
        $task->save();
        
        //登録したらindexを再読み込み
        return redirect('/tasks');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect(route('tasks.index'));
    }
}
