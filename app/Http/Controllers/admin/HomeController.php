<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TodoList;

class HomeController extends Controller
{
    private $arr_todo_name;

    public function index(Request $request)
    {
        return view('admin.home');
    }

    public function insert_to_todo_list(Request $request)
    {
        if (!$request->has('name'))
        {
            return redirect()->route('admin.home');
        }
        $this->arr_todo_name = [
            'list_name' => $request->input('name'),
            'list_status' => 'todo'
        ];
        TodoList::set_todo($this->arr_todo_name);
        return redirect()->route('admin.home');
    }

    public function show()
    {
        $todo_list = TodoList::get_todo_list();
        $data = [
            'todo_list' => $todo_list
        ];
        return view('admin.show-list', $data);
    }
}
