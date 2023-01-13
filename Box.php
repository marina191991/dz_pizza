<?php

class Box
{
private static float $price=1.0;

public static function getPrice(): int {
    return self::$price;
}
}