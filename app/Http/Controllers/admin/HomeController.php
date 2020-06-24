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
        $this->arr_todo_name = [
            'list_name' => $request->input('name'),
            'list_status' => 'todo'
        ];
        if ($request->has('name'))
        {
            TodoList::set_todo($this->arr_todo_name);
        }
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

    public function delete_todo_item(Request $request)
    {
        $id_to_delete_in_db = $request->input('remove');
        TodoList::delete_todo_item($id_to_delete_in_db);
        return redirect()->route('admin.show');
    }

    public function update_todo(Request $request)
    {
        $data_for_update = $request->input('update');
        $id_for_reference_in_db = $request->input('list_id');
        TodoList::update_todo_item($id_for_reference_in_db, $data_for_update);
        return view('admin.update');
    }
}
