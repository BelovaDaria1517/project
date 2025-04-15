<?php

namespace Dasha\Child;

use Dasha\Parent\Snack;
use Dasha\Parent\ChocolateFactory;
use Dasha\Child\ChocolateBar;
use Dasha\Child\ChocolateCake;
use Dasha\Child\ChocolateCandy;

class PremiumChocolateFactory extends ChocolateFactory
{
    protected function createSnack(string $type): Snack
    {
        return match ($type) {
            'bar' => new ChocolateBar(),
            'candy' => new ChocolateCandy(),
            'cake' => new ChocolateCake(),
            default => throw new \InvalidArgumentException("Unknown snack type: $type"),
        };
    }
}