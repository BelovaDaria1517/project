<?php

namespace Dasha\Child;

require_once 'vendor/autoload.php';

use Dasha\Parent\Snack;
use Dasha\Parent\ChocolateFactory;
use Dasha\Child\ChocolateBar;
use Dasha\Child\ChocolateCake;
use Dasha\Child\ChocolateCandy;

class PremiumChocolateFactory extends ChocolateFactory
{
    public array $vidSnack=["Bar","Candy","Cake","Cookies"];

    public function createSnack(string $name): Snack|string
    {
        if ($name === "Bar") {
            $newChocolateBar = new ChocolateBar();
            return $newChocolateBar;
        }

        if ($name === "Cake") {
            $newChocolateCake = new ChocolateCake();
            return $newChocolateCake;
        }

        if ($name === "Candy") {
            $newChocolateCandy = new ChocolateCandy();
            return $newChocolateCandy;
        }

        if ($name === "Cookies") {
            $newChocolate4 = new Snack ($name, "молочный шоколад", ["печенье"]) ;
            return $newChocolate4;
        }

        $i=0;
        foreach($this->vidSnack as $vidSnack){
            if ($name===$vidSnack){
                $i=$i+1;
            }
        }
        if ($i===0){
            echo "Такого снека нет в списке";   
        }
        exit;
        
    }
}