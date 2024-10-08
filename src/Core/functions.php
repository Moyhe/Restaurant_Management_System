<?php


function dd($value): void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function abort($code = 404): void
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}


function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($path, $attributes = []): void
{
    extract($attributes);

    require base_path('views/' . $path);
}

function redirect($path): void
{
    header("location: {$path}");
    exit();
}
