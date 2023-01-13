<?php

interface iCostable
{
    /**
     * Возвращает стоимость
     *
     * @return float
     */
    public function getCost(): float;
}