<?php

class Pizza
{
    /**
     * Массив с ингредиентами пиццы
     *
     * @var PizzaIngredient[]
     */
    protected array $ingredients;

    protected array $souses;


    /**
     * Получить массив ингредиентов пиццы
     *
     * @return PizzaIngredient[]
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    /**
     * @param PizzaIngredient $ingredient
     *
     * @return Pizza
     */
    public function addIngredient(PizzaIngredient $ingredient): Pizza
    {
        $this->ingredients[] = $ingredient;
return $this;
    }
    public function addSouse(Souse $souse): Pizza {
        $this->souses [] = $souse;
        return $this;
    }
public function getSouse(): array {
        return $this->souses;
}

}