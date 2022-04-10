<?php

require __DIR__ . '/vendor/autoload.php';

use App\Abstraction\Bmw;
use App\Abstraction\Mercedes;
use App\Abstraction\Order;


$bmw = new Bmw(120, 4, "FRONT", "black");

$mercedes = new Mercedes(200, 4, "back", "white");

$order1 = new Order("cairo", "alex", 400);
$order2 = new Order("mit ghmr", "mansoura", 200);

var_dump($order1->deliverOrder($bmw));
var_dump($order2->deliverOrder($mercedes));