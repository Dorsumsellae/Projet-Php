<?php
$zip = new ZipArchive();
if ($zip->open('data\flags.zip')) {
    $zip->extractTo('data');
    $zip->close();
}
