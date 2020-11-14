<?php

class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = pi() * pow($radius, 2);
        $perimeter = pi() * $radius * 2;
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }
}