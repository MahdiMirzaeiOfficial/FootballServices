<?php
echo "
<article class='container-fluid'>
    <section class='col-3'>
        <article class='card mt-5 mb-5 border-warning'>
            <header class='card-header text-center'>
                <img src='{$row['club_logo']}' class='card-image-top w-50 mb-2'>
                <h3 class='card-title text-primary text-center mb-2'>{$row['club_name']}</h3>
                <h4 class='card-subtitle text-muted text-center mb-2'>{$row['club_motto']}</h4>
            </header>
            <section class='card-body'>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'>ورزشگاه اختصاصی: {$row['club_special_stadium_name']}</li>
                    <li class='list-group-item'><span lang='en'>سال تاسیس: {$row['club_year_founding']}</span> و موسس باشگاه: {$row['club_founder']}</li>
                    <li class='list-group-item'>نام مالک کنونی: {$row['club_owner']} و نام سرمربی: {$row['club_head_coach']}</li>
                </ul>
            </section>
            <footer class='card-footer'>
            </footer>
        </article>
    </section>
</article>
";