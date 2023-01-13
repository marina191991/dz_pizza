<?php
include_once 'Box.php';
include_once 'CurrencyRate.php';
include_once 'Souse.php';

class PizzaCalculator
{
    public function __construct() {
$cost = Box::getPrice();
}
    /**
     * Подсчитывает и возвращает вес пиццы
     *
     * @param Pizza $pizza
     *
     * @return float
     */
    public function calculatePizzaWeight(Pizza $pizza): float
    {
        $weight = 0.00;
        foreach ($pizza->getIngredients() as $ingredient) {
            $weight += $ingredient->getWeight();
        }

        return $weight;
    }

    /**
     * Подсчитывает и возвращает стоимость пиццы
     *
     * @param Pizza $pizza
     *
     * @return float
     */
    public function calculatePizzaCost(Pizza $pizza): float
    {
        $cost = Box::getPrice();
        foreach ($pizza->getSouse() as $souse) {
            $cost += $souse->getCost();
        }
        foreach ($pizza->getIngredients() as $ingredient) {
            if (method_exists($ingredient,'getCost')) {
                $cost += $ingredient->getCost();
            }
        }
      return round($cost,2);
    }

    public function calculatePizzaCostInEUR(Pizza $pizza): float {
        $cost = Box::getPrice();
        foreach ($pizza->getSouse() as $souse) {
            $cost += $souse->getCost();
        }
        foreach ($pizza->getIngredients() as $ingredient) {
            if (method_exists($ingredient,'getCost')) {
               $cost += $ingredient->getCost();
            }
        }

        return CurrencyRate::currencyEuro($cost);
    }


    public function calculatePizzaCostInRUB(Pizza $pizza): float
    {
        $cost = Box::getPrice();
        foreach ($pizza->getSouse() as $souse) {
            $cost += $souse->getCost();
        }
        foreach ($pizza->getIngredients() as $ingredient) {
            if (method_exists($ingredient,'getCost')) {
                $cost += $ingredient->getCost();
            }
        }

        return CurrencyRate::currencyRub($cost);

    }
}