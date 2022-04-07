<?php

declare(strict_types = 1);


require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\Car;
use App\OOP\Cars\BMW;
use App\OOP\Cars\Mercedes;
use App\OOP\Order;


$bmw = new BMW(100, 4, 'manual', 'red', true);
$mercedes = new Mercedes(200, 4, 'automatic', 'blue', true);
$order1 = new Order('cairo', 'ismailia', 100);
$order2 = new Order('cairo', 'alexandria', 200);
var_dump($order1->deliverOrder($bmw));
var_dump($order2->deliverOrder($mercedes));
