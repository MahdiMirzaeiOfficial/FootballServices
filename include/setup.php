<?php

include 'setting.php';
include 'functions.php';

$db = new DB(false);

if (!$software_setup) {
    $sql = "DROP DATABASE IF EXISTS {$database_name}";
    $db->execute($sql);
    fs_alert("دیتابیس {$database_name} و جداول آن حذف شد.", 'success');
}

$sql = "CREATE DATABASE IF NOT EXISTS {$database_name}
CHARSET {$charset}
COLLATE {$collate}";
$result = $db->execute($sql);
if ($result) {
    fs_alert("دیتابیس {$database_name} با موفقیت ایجاد شد.", 'success');
}
unset($db);

$db = new DB();
$sql = "CREATE TABLE IF NOT EXISTS message(
		id INT AUTO_INCREMENT NOT NULL,
		full_name VARCHAR(128),
        email VARCHAR(256),
        phone_number VARCHAR(11),
        message TEXT,
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db->execute($sql);
if ($result) {
    fs_alert('جدول تماس با ما با موفقیت ایجاد شد.', 'success');
}

$sql = "CREATE TABLE IF NOT EXISTS footballClub(
		id INT AUTO_INCREMENT NOT NULL,
		club_name VARCHAR(128),
        club_special_stadium_name VARCHAR(128),
        club_year_founding DATE,
        club_motto VARCHAR(256),
        club_owner VARCHAR(128),
        club_founder VARCHAR(128),
        club_sponsors VARCHAR(1024),
        club_country VARCHAR(64),
        club_city VARCHAR(64),
        club_head_coach VARCHAR(128),
        club_logo VARCHAR(256),
        club_special_stadium_image VARCHAR(256),
        club_official_song VARCHAR(256),
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db->execute($sql);
if ($result) {
    fs_alert('جدول باشگاه ها با موفقیت ایجاد شد.', 'success');
}

$sql = "CREATE TABLE IF NOT EXISTS user(
    id INT AUTO_INCREMENT NOT NULL,
    full_name VARCHAR(128),
    email VARCHAR(256),
    phone_number VARCHAR(11),
    PRIMARY KEY(id)
    )ENGINE = INNODB";
$result = $db->execute($sql);
if ($result) {
    fs_alert('جدول کاربران با موفقیت ایجاد شد.', 'success');
}

$alerts = fs_alert();

?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات فوتبالی | نصب</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/main.css">
</head>

<body>
    <section class="container-fluid">
        <header class="row">
            <section class="col-12">
                <h1 class="text-center bg-primary text-light p-5">ثبت باشگاه فوتبال</h1>
            </section>
        </header>
        <main class="row justify-content-center mt-1">
            <section class="col-8">
                <?php
                if (isset($alerts))
                    echo $alerts;
                ?>
            </section>
        </main>
        <footer class="row">
            <section class="col-12">
                <p class="text-center bg-primary text-light p-3">کلیه حقوق سایت محفوظ می باشد. ©</p>
            </section>
        </footer>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="../public/assets/javascript/main.js"></script>
</body>

</html>