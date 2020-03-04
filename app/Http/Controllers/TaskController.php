<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;
use App\Http\Requests\UpdateTask;
// use === このクラスを使います
use App\Task;

class TaskController extends Controller
{
    public function index(){

        // メソッドとはクラスの中で定義されている関数
        // データの取得
        // データの取得はModelにお願いする
        // all = テーブルのレコードをすべて取得
        // Class Taskに対応してるテーブルのレコード
        // ファサード/サービスプロバイダーとは
        // クラスメソッドのようにインスタンスメソッドを実行
        $tasks = Task::all();
        // dd($tasks);

        // viewを返す

        return view('tasks.index', compact('tasks'));
        dd(1234);
    }
    public function create(){
        return view('tasks.create');
    }


    public function store(CreateTask $request){


        //dd($request->all() , $request->input('tel'));

        // データの保存(model)
        Task::create([
            'tel' => $request->input('tel'),
        ]);


        // 一覧に戻る(view)
        // このスラッシュはあってもなくてもいい
        return redirect()->to('/list');
    }

    public function edit(int $id){

        // 編集対象のデータを取得する
        $task = Task::find($id);
        //dd($task->tel, $id);


        // 編集画面を表示する
        // tasks フォルダに　edit.blade.phpを作る
        // taskとはモデルから持ってきたデータ
        return view('tasks.edit', compact('task'));

        // tasks/edit.blade.php
        // $taskは渡す
        // create.blade.phpをコピーでOK


    }

    public function update(UpdateTask $request, int $id){

        // 更新する対象のデータを取得
        // findでデータを一つだけ取得できる
        $task = Task::find($id);
        //dd($request->input('tel'));
        //dd($request->tel);
        // 同じ結果が出る

        // 更新
        $task->update([
            'tel' => $request->tel,
        ]);

        // 一覧画面に戻る
            return redirect()->to('/list');

        dd($request->all(), $id);
    }
    // int　とは　ここには数字さしか入ってはいけないなどの条件
    public function delete(int $id){


        // 選択されたデータの取得
        // $id の数字はデータの数字
        $task = Task::find($id);
        //dd($task);

        // 選択されたデータの削除
        $task->delete();

        // 一覧画面に戻る
        return redirect()->to('/list');

    }
}


