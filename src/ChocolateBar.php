<?php

namespace Dasha\Child;

use Dasha\Parent\Snack;

class ChocolateBar extends Snack
{
    public function __construct(string $name="Bar",string $chocolate="молочный шоколад",array $toppings=["орехи","карамель"]){
        parent::__construct($name, $chocolate, $toppings);
    }

    public function cut(): void
    {
        echo "Шоколадный батончик режется на плитки\n";
    }
}