<?php

/*
 * in_array
 * Checks if a value exists in an array
 * if the value doesn't exist in the array
 * the value will not display
 * */

function validate_css_path($path): bool
{
    $allowed_paths = [
        "/css/body.css",
        "/css/header.css",
        # ...
    ];

    if (in_array($path, $allowed_paths)) {
        return true;
    } else {
        return false;
    }
}