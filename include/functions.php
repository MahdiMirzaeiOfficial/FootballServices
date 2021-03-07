<?php

include 'DB.php';

if (!function_exists('alert_template')) {
    function alert_template($text, $type = 'error')
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

if (!function_exists('fs_alert')) {
    function fs_alert($text = '', $type = 'error')
    {
        static $alerts = '';
        if ($text !== '') {
            $alerts .=  alert_template($text, $type);
        } elseif ($alerts !== '') {
            $result = $alerts;
            $alerts = '';
            return $result;
        } else
            return false;
    }
}

if (!function_exists('fs_redirect')) {
    function fs_redirect($address)
    {
        header("Location: {$address}");
        exit();
    }
}