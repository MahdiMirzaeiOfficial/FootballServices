<?php

include 'setting.php';
include 'functions.php';
$alert = '';

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO fs_football_club(club_name, club_special_stadium_name, club_year_founding, club_motto, club_owner, club_founder, club_sponsors,     club_country, club_city, club_head_coach, club_logo, club_special_stadium_image, club_official_song)
VALUES('{$_POST['club_name']}', '{$_POST['club_special_stadium_name']}', '{$_POST['club_year_founding']}', '{$_POST['club_motto']}', '{$_POST['club_owner']}', '{$_POST['club_founder']}', '{$_POST['club_sponsors']}', '{$_POST['club_country']}', '{$_POST['club_city']}', '{$_POST['club_head_coach']}', '{$_POST['club_logo']}', '{$_POST['club_special_stadium_image']}', '{$_POST['club_official_song']}')";

    $db = new DB();

    $result = $db->execute($sql);

    unset($db);

    if ($result) {
        $alert = fs_alert('با موفقیت ثبت شد.', 'success');
    }
}

?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات فوتبالی | ثبت باشگاه فوتبال</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
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
                if (isset($alert)) {
                    echo $alert;
                }
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
    <script src="assets/javascript/main.js"></script>
</body>

</html>