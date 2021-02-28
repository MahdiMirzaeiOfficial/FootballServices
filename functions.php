<?php

include 'DB.php';

if (!function_exists('alert')) {
    function fs_alert($text, $type = 'error')
    {
        switch ($type) {
            case 'success':
                $type = 'success';
                break;
            case 'warning':
                $type = 'warning';
                break;
            case 'danger':
                $type = 'danger';
                break;
        }

        $alert = "<article class='alert alert-{$type} alert-dismissible fade show' role='alert'>
                {$text}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </article>";

        return $alert;
    }
}