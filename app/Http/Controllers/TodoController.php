<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        $data = compact('todos');
        return view('welcome')->with($data);
    }
    public function insert(Request $req)
    {
        $req->validate(
            [
                'name' => 'required',
                'desc' => 'required',
                'duedate' => 'required'
            ]
        );

        $todo = new Todo;
        $todo->name = $req['name'];
        $todo->desc = $req['desc'];
        $todo->due_date = $req['duedate'];
        $todo->save();

        return redirect('/');
    }

    public function update($id)
    {
        $todo = Todo::find($id);
        $data = compact('todo');
        return view('update')->with($data);
    }

    public function edit(Request $req)
    {
        $req->validate(
            [
                'name' => 'required',
                'desc' => 'required',
                'duedate' => 'required'
            ]
        );

        $id = $req['hidden'];
        $todo = Todo::find($id);
        $todo->name = $req['name'];
        $todo->desc = $req['desc'];
        $todo->due_date = $req['duedate'];
        $todo->save();

        return redirect('/');
    }

    public function delete($id)
    {
        Todo::find($id)->delete();
        return redirect('/');
    }
}
