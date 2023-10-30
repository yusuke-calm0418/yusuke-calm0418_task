<?php

namespace App\Http\Controllers;

use App\Models\Task;
// use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{

    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.index');
    }

    public function store(TaskRequest $request)
    {
        // インスタンスの作成
        $task = new Task;

        // 値の用意
        $task->title = $request->title;
        $task->body = $request->body;

        // インスタンスに値を設定して保存
        $task->save();

        // 登録したらindexに戻る
        return redirect(route("tasks.index"));
    }


    // showページへ
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    // 編集
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    // 更新
    public function update(TaskRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $task = Task::find($id);

        // 値の用意
        $task->title = $request->title;
        $task->body = $request->body;

        // 保存
        $task->save();

        // 登録したらindexに戻る
        return redirect(route("tasks.index"));
    }

    // 削除
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect(route("tasks.index"));
    }
}
