<?php

include '../include/setting.php';
include '../include/functions.php';
$alert = '';

$db = new DB();
$table = FootballClub::find();

unset($db);

$alert = fs_alert();

include '../include/views/football_club_catalog.php';