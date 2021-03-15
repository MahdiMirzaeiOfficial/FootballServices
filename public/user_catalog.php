<?php

include '../include/setting.php';
include '../include/functions.php';
$alert = '';

$db = new DB();
$table = User::find();

unset($db);

$alert = fs_alert();

include '../include/views/user_catalog.php';