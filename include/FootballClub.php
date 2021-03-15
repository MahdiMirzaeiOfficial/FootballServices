<?php

if (!class_exists('FootballClub')) {
    class FootballClub
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
                fs_alert('باشگاه با موفقیت ثبت شد.', 'success');
            }
        }
        static function update()
        {
        }
        static function delete()
        {
        }
        static function find($where = 'TRUE', $order = 'id DESC', $offset = 0, $count = 10000)
        {
            $table_name = get_class();  // __CLASS__ Or self::class
            $sql = "SELECT * FROM {$table_name}
            WHERE {$where}
            ORDER BY {$order}
            LIMIT {$offset}, {$count}";
            $table = $GLOBALS['db']->execute($sql);
            return $table;
        }
    }
}