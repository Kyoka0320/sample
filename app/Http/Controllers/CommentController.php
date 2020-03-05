<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\CreateTask;

class CommentController extends Controller
{
     public function index()
     {

    // データ取得
    // これがデータベースからデータをすべて持ってきている。データベースはmodel.phpに入ってる。
    $comments = comment::all();

    // 画面の表示
    // compactとは$commntをviewに渡している
    // viewがファイルを読み込みこみたい時
    // redirectは処理が終わったらここに戻ってくださいという命令
    return view('comments.index', compact('comments'));


     }

     public function create()
     {
        // ここでは画面の表示しのみが必要
        return view('comments.create');
     }

     public function store(CreateTask $request)
     {
        // return redirect()->to('/list');
        // これでデータベースをすべて持ってきている。
        // -> アロー関数
        // データを保存するときはcreate
        // all はすべて
        Comment::create([
            'body'=>$request->input('body')
        ]);

        // redirectの書き方はこれで決まっている。
        return redirect()->to('comment');

     }
}
