<?php
echo "
<article class='container-fluid'>
    <section class='col-6'>
        <article class='card mt-5 mb-5 border-warning'>
            <header class='card-header text-center'>
                <h3 class='card-title text-primary text-center mb-2'>{$row['full_name']}</h3>
            </header>
            <section class='card-body'>
                <p class='text-center mb-2'>{$row['email']}</p>
                <p class='text-center mb-2 persian-number'>{$row['phone_number']}</p>
                <p class='mb-2'>{$row['message']}</p>
            </section>
            <footer class='card-footer'>
            </footer>
        </article>
    </section>
</article>
";