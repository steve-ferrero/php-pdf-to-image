<?php

require_once 'PDFToImage.php';

use WebAtrio\PDFToImage\PDFToImage;

$test = new PDFToImage("test.pdf");
$test->convert("test.png");
