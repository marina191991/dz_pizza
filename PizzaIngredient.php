<?php

abstract class PizzaIngredient
{
    /**
     * Вес ингредиента (в килограммах)
     *
     * @var float
     */
    protected float $weight;

    /**
     * @param float $weight
     */
    public function __construct(float $weight)
    {
        $this->weight = $weight;
    }

    /**
     * Возвращает вес ингредиента (в килограммах)
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
}