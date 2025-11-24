<?php


use Study\Design\CoffeeShop\Coffee\Coffee;
use Study\Design\CoffeeShop\Coffee\Decorator\MilkDecorator;
use Study\Design\CoffeeShop\Coffee\Decorator\WhipDecorator;

renderHeaderPage(
    'Resultado do design pattern Decorator',
    'O Decorator permite adicionar novas funcionalidades a um objeto de forma dinâmica, sem alterar a classe original. Ele “embrulha” o objeto em outro, que implementa a mesma interface, mas adiciona comportamentos extras. Isso evita criar subclasses para cada variação possível. É útil quando você precisa estender funcionalidades de forma flexível, como adicionar compressão, criptografia ou logging em fluxos de dados.',
    'src/CoffeeShop'
);

$coffee = new Coffee();

echo "{$coffee->description()}, Preço: {$coffee->cost()}";
echo "<br/>";

$coffeeMilk = new MilkDecorator($coffee);
echo "{$coffeeMilk->description()}, Preço: {$coffeeMilk->cost()}";
echo "<br/>";

$coffeeWhip = new WhipDecorator($coffee);
echo "{$coffeeWhip->description()}, Preço: {$coffeeWhip->cost()}";
echo "<br/>";

$coffeeMilkWhip = new WhipDecorator($coffeeMilk);
echo "{$coffeeMilkWhip->description()}, Preço: {$coffeeMilkWhip->cost()}";

renderFooterPage();
