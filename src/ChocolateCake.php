<?php

namespace Dasha\Child;

use Dasha\Parent\Snack;

class ChocolateCake extends Snack
{

    public function __construct(string $name="Cake",string $chocolate="белый шоколад",array $toppings=["крем","ягоды","посыпка"]){
        parent::__construct($name, $chocolate, $toppings);
    }

    public function cut(): void
    {
        echo "Шоколадный торт режется на кусочки\n";
    }
}