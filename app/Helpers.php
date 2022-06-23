<?php



function logo_link()
{
    return $img = Image::make('public/images/eduline-logo.png');
}

function set_active($path, $active = "active")
{
    return Request::is($path) ? $active : '';
}

