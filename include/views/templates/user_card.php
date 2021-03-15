<?php
echo "
<article class='container-fluid'>
    <section class='col-3'>
        <article class='card mt-5 mb-5 border-warning'>
            <header class='card-header text-center'>
                <img src='{$row['profile']}' class='card-image-top w-50 mb-2'>
            </header>
            <section class='card-body'>
                <h3 class='card-title text-primary text-center mb-2'>{$row['full_name']}</h3>
                <p class='text-center mb-2'>{$row['email']}</p>
                <p class='text-center mb-2 persian-number'>{$row['phone_number']}</p>
            </section>
            <footer class='card-footer'>
            </footer>
        </article>
    </section>
</article>
";