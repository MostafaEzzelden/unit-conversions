<?php

namespace Expandcart\UnitConversions;

class Weight
{
    /** @var float */
    private $kilograms;

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }
    
    public function toPounds()
    {
        return $this->kilograms * 2.204623;
    }
}
