<?php

include '../include/setting.php';
include '../include/functions.php';
$alert = '';

if (isset($_POST['submit'])) {
    $club_logo = 'assets/image/clubs/clubs_logo/fc_barcelona/barcelona512.png';
    $club_special_stadium_image = 'assets/image/clubs/clubs_stadium/fc_barcelona/camp_nou.jpg';
    $club_official_song = 'assets/image/clubs/clubs_songs/fc_barcelona.mp3';

    unset($_POST['submit']);

    $_POST['club_logo'] = $club_logo;
    $_POST['club_special_stadium_image'] = $club_special_stadium_image;
    $_POST['club_official_song'] = $club_official_song;

    $db = new DB();
    FootballClub::add($_POST);

    unset($db);

    $alert = fs_alert('با موفقیت ثبت شد.', 'success');
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