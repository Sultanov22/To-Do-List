<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TodolistController;


class TodolistController extends Controller
{
    public function index()
    {
        $todo_list = Todolist::all();
        return view('post.home', compact('todolists'));
    }

    public function store(Request $requst)
    {
        $data = $request->validate([
            'content' =>'required'
        ]);

        Todolist::create($data);
        return back();
    }

    public function destroy(Todolist $todolist)
    {
        $todolist->delete();
        return back();
    }
}
