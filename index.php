<?php

require 'vendor/autoload.php';

use Dasha\Child\PremiumChocolateFactory;

$factory = new PremiumChocolateFactory();

echo "1. Заказываем батончик:\n";
$factory->orderSnack('bar');

echo "\n2. Заказываем конфеты:\n";
$factory->orderSnack('candy');