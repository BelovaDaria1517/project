<?php


namespace Dasha\Child;
use Dasha\Parent\Snack;

class ChocolateCandy extends Snack
{

    public function __construct(string $name="Candy",string $chocolate="темный шоколад",array $toppings=["миндаль","вишневая начинка"]){
        parent::__construct($name, $chocolate, $toppings);
    }

    public function cut(): void
    {
        echo "Шоколадные конфеты формируются кубиками\n";
    }
}