<?php

namespace Dasha\Child;

use Dasha\Parent\Snack;

class ChocolateBar extends Snack
{
    public function __construct()
    {
        parent::__construct(
            'Шоколадный батончик',
            'Молочный шоколад',
            ['Орехи', 'Карамель']
        );
    }

    public function cut(): void
    {
        echo "Шоколадный батончик режется на плитки\n";
    }
}