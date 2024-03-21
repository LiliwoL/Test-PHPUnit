<?php

class Calculator
{
    public function add($a, $b): int
    {
        return $a + $b;
    }

    public function sub($a, $b): int
    {
        return $a - $b;
    }

    public function mul($a, $b): int
    {
        return $a * $b;
    }

    public function div($a, $b): float
    {
        return $a / $b;
    }
}