<?php

namespace Dasha\Child;

use Dasha\Parent\Snack;

class ChocolateCake extends Snack
{
    public function __construct()
    {
        parent::__construct(
            'Шоколадный торт',
            'Белый шоколад',
            ['Крем', 'Ягоды', 'Посыпка']
        );
    }

    public function cut(): void
    {
        echo "Шоколадный торт режется на кусочки\n";
    }
}