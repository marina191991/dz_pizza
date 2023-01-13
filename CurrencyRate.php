<?php

class CurrencyRate
{
private static float $euroToUsd;
private static float $rubToUsd;

    /**
     * @return float
     */
    public static function getEuroToUsd(): float
    {
        return self::$euroToUsd;
    }

    /**
     * @param float $euroToUsd
     */
    public static function setEuroToUsd(float $euroToUsd): void
    {
        self::$euroToUsd = $euroToUsd;
    }

    /**
     * @return float
     */
    public static function getRubToUsd(): float
    {
        return self::$rubToUsd;
    }

    /**
     * @param float $rubToUsd
     */
    public static function setRubToUsd(float $rubToUsd): void
    {
        self::$rubToUsd = $rubToUsd;
    }



public static function currencyEuro(float $usd): float {
    return round(self::$euroToUsd*$usd,2);
}
public static function currencyRub(float $usd): float {
    return round(self::$rubToUsd*$usd,2);
}

}