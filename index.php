<?php
require_once('vendor/autoload.php');
use haralgan\URLLibrary\MyUrl;

$url = new MyUrl();
echo $url ->slugify("https://www.example.org","Das ist ein langer Text");
