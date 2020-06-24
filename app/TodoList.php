<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class TodoList extends Model
{
    private static $table_name = 'db_todo_list';
    private static $list_id_column = 'list_id';

    public static function get_todo_list(): Collection
    {
        return DB::table(self::$table_name)->get();
    }

    public static function set_todo($arr_todo_name): void
    {
        DB::table(self::$table_name)->insert($arr_todo_name);
    }

    public static function delete_todo_item($id_to_delete_in_db): void
    {
        DB::table(self::$table_name)->where(self::$list_id_column, $id_to_delete_in_db)->delete();
    }

    public static function update_todo_item($id_for_reference_in_db, $data_for_update)
    {
        $updating = ['list_name'=> $data_for_update];
        DB::table(self::$table_name)->where(self::$list_id_column, $id_for_reference_in_db)->update($updating);
    }
}
