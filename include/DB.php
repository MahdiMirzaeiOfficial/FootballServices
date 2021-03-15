<?php

include 'FootballClub.php';
include 'Message.php';
include 'User.php';

if (!class_exists('DB')) {
    class DB
    {
        var $dbc;
        function __construct($select_db = true)
        {
            $this->connect();
            if ($select_db) {
                $this->select_db();
            }
            $this->dbc->set_charset(CHARSET);
        }
        function connect()
        {
            $this->dbc = new mysqli(HOST, USERNAME, PASSWORD);
            if ($this->dbc->connect_error) {
                $error = "
                    خطا در اتصال به دیتابیس
                    <section lang='en'>{$this->dbc->connect_error}</section>
                ";
                die($error);
            }
        }
        function select_db()
        {
            $this->dbc->select_db(DATABASE_NAME);
            if ($this->dbc->error) {
                $error = "
                    خطا در انتخاب دیتابیس
                    <section lang='en'>{$this->dbc->error}</section>
                ";
                die($error);
            }
        }
        function execute($sql, $params = false)
        {
            $result = $this->dbc->query($sql);
            if ($this->dbc->error) {
                $error = "
                    خطا در اجرای کوئری
                    <section lang='en'>
                        <p>{$sql}</p>
                        {$this->dbc->error}
                    </section>
                ";
                die($error);
                return false;
            } else if ($result !== true && $result !== false) { // Select
                $table = $result->fetch_all(MYSQLI_ASSOC);
                return $table;
            } else if (isset($this->dbc->insert_id)) {
                return $this->dbc->insert_id;
            } else {
                return $result;
            }
        }
        function __destruct()
        {
            $this->dbc->close();
        }
    }
}