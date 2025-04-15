<?php


namespace Dasha\Child;

use Dasha\Parent\Snack;

class ChocolateCandy extends Snack
{
    public function __construct()
    {
        parent::__construct(
            'Шоколадные конфеты',
            'Тёмный шоколад',
            ['Миндаль', 'Вишнёвая начинка']
        );
    }

    public function cut(): void
    {
        echo "Шоколадные конфеты формируются кубиками\n";
    }
}