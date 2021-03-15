<?php

include '../include/setting.php';
include '../include/functions.php';
$alert = '';

$db = new DB();
$table = Message::find();

unset($db);

$alert = fs_alert();

include '../include/views/message_catalog.php';