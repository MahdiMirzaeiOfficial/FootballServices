<?php

if (!class_exists('Message')) {
    class Message
    {
        static function columns_list($vars, $sep = ', ')
        {
            $columns = array_keys($vars);
            return join($sep, $columns);
        }
        static function values_list($vars, $sep = "' ,'")
        {
            $values = array_values($vars);
            return "'" . join($sep, $values) . "'";
        }
        static function add($params)
        {
            $columns_string = self::columns_list($params);
            $values_string = self::values_list($params);
            $table_name = __CLASS__;

            $sql = "INSERT INTO {$table_name} ({$columns_string}) VALUES ({$values_string})";

            $result = $GLOBALS['db']->execute($sql);

            if ($result) {
                fs_alert('پیام با موفقیت ثبت شد.', 'success');
            }
        }
        static function update()
        {
        }
        static function delete()
        {
        }
        static function find()
        {
        }
    }
}