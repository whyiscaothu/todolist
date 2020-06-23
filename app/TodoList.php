<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class TodoList extends Model
{
    public static function get_todo_list(): Collection
    {
        return DB::table('db_todo_list')->get();
    }

    public static function set_todo($arr_todo_name): void
    {
        DB::table('db_todo_list')->insert($arr_todo_name);
    }
}
