<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;
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
}


