<?php

/*
 * preg_replace :
 * to remove all characters that are not letters, numbers or slashes.
 * */

function validateInput($input): array|string|null
{
    return preg_replace('/[^A-Za-z0-9\/]/', '', $input);
}
