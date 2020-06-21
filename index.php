<?php
require_once __DIR__ . '/vendor/autoload.php';

// import the AnimeLorem Image Class
use AnimeLorem\Image;

// create an image from storage
$image = new Image(__DIR__ . '/storage/app');

// set options
$greyscale = isset($_GET['g']) ? true : false;

// send HTTP header and output image data
echo $image->response('jpg', $greyscale);