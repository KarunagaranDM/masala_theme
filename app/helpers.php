<?php

if (!function_exists('theme_asset')) {
    function theme_asset($path)
    {
        $theme = config('view.theme', 'theme_1');
        return asset("themes/{$theme}/{$path}");
    }
}

if (!function_exists('theme_color')) {
    function theme_color()
    {

        return '#f87e10';
    }
}