<?php
include_once 'PizzaIngredient.php';
include_once 'Pizza.php';
include_once 'PizzaCalculator.php';
include_once 'Dough.php';
include_once 'Peperoni.php';
include_once 'Box.php';
include_once 'CurrencyRate.php';

CurrencyRate::setRubToUsd(70.0);
CurrencyRate::setEuroToUsd(0.9);

$pizza = new Pizza();
$pizza->addIngredient(new Dough(0.255))->addIngredient(new Peperoni(0.145, 5.20));
$pizza->addSouse(new Souse('BBQ',2.1,2))->addSouse(new Souse('chili',1.5));
$pizzaCalculator = new PizzaCalculator();



$totalWeight = $pizzaCalculator->calculatePizzaWeight($pizza);
$totalCost = $pizzaCalculator->calculatePizzaCost($pizza);
$totalCostEUR = $pizzaCalculator->calculatePizzaCostInEUR($pizza);
$totalCostRUB = $pizzaCalculator->calculatePizzaCostInRUB($pizza);

echo "Получилась пицца весом $totalWeight кг и стоимостью $totalCost".' usd'."\n";
echo "Получилась пицца весом $totalWeight кг и стоимостью $totalCostEUR".' euro'."\n";
echo "Получилась пицца весом $totalWeight кг и стоимостью $totalCostRUB".' rub'."\n";