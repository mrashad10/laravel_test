<?php

if (!function_exists('pp')) {
    function pp($var)
    {
        echo "<pre>";
        var_export($var);
        echo "</pre>";
    }
}
