<?php

// namesapce == 部署名、A組みたいなクラス名
// calss名　== 名前
// class名は重複してはいけない
namespace App\Http\Controllers;

use App\Follower;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function index(){
        
        // データの取得
        // Modelが担当
        // Followersテーブルのデータ
        $followers = Follower::all();

        // 画面の表示   
        return view('followers.index', ['f' => $followes]);
    }
}
