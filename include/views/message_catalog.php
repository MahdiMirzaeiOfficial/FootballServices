<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات فوتبالی | لیست پیام ها</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <section class="container-fluid">
        <header class="row">
            <nav class="bg-primary">
                <ul class="nav justify-content-center p-2">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="../index.html">صفحه اصلی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="add_football_club.html">افزودن باشگاه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="register.html">عضویت</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.html">تماس با ما</a>
                    </li>
                </ul>
            </nav>
            <section class="col-12">
                <h1 class="text-center text-primary m-0 p-5">لیست پیام ها</h1>
            </section>
        </header>
        <main class="row justify-content-center mt-1">
            <section class="col-12">
                <?php
                if (isset($alert)) {
                    echo $alert;

                    foreach ($table as $row) {
                        include __DIR__ . '/templates/message_card.php';
                    }
                }
                ?>
            </section>
        </main>
        <footer class="row">
            <section class="col-12 bg-primary">
                <p class="text-center text-light m-0 p-3">کلیه حقوق سایت محفوظ می باشد. ©</p>
            </section>
        </footer>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="assets/javascript/main.js"></script>
</body>

</html>