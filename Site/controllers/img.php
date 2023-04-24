<?php

/*
 *
 * */

$image = fopen((RACINE.DIRECTORY_SEPARATOR.URL), "rb", true);
$info = new SplFileInfo((RACINE.DIRECTORY_SEPARATOR.URL));
$extension = $info->getExtension();
header("Content-Type: image/" . $extension);
header("Content-Length: " . filesize(RACINE.DIRECTORY_SEPARATOR.URL));
fpassthru($image);