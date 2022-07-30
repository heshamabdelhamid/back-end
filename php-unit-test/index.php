<?php

include 'vendor/autoload.php';

use App\Product;

$product = new Product('mobile', 5);

var_dump($product);