<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
     public function index(){

    $comments = comment::all();

    return view('comments.index', compact('comments'));


     }
}