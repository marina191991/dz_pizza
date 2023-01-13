<?php
include_once 'PizzaIngredient.php';
include_once 'iCostable.php';
class Peperoni extends PizzaIngredient implements iCostable
{
    /**
     * Стоимость за 1 кг
     *
     * @var float
     */
    protected float $pricePerKg;

    /**
     * @param float $weight
     * @param float $pricePerKg
     */
    public function __construct(float $weight, float $pricePerKg)
    {
        $this->pricePerKg = $pricePerKg;

        parent::__construct($weight);
    }

    /**
     * Возвращает стоимость
     *
     * @return float
     */
    public function getCost(): float
    {
        return round($this->pricePerKg*$this->weight,2);
        // todo - в зависимости от веса ингредиента и цены на кг меняется и общая стоимость
    }

}