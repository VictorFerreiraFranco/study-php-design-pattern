<?php

use Study\Design\Font\CharacterFactory;

renderHeaderPage(
    'Resultado do design pattern Flyweight',
    'O Flyweight ajuda a economizar memória quando há muitos objetos iguais ou muito semelhantes. Ele compartilha partes imutáveis de objetos entre várias instâncias, reduzindo a duplicação. Isso é útil em editores de texto (onde cada letra é um objeto, mas instâncias iguais são reutilizadas) ou jogos (onde milhares de árvores ou balas compartilham o mesmo estado interno).',
    'src/Font'
);

$word = 'Ola, Victor';

foreach (str_split($word) as $char)
    CharacterFactory::getCharacter($char)->render("Arial", 10);

echo "<br/>";

foreach (str_split($word) as $char)
    CharacterFactory::getCharacter($char)->render("Verdana", 12);

echo "<br/>";

if ( CharacterFactory::getCharacter("A") ===  CharacterFactory::getCharacter("A"))
    echo "É a mesma instancia";
else
    echo "Não é a mesma instancia";
    

renderFooterPage();
