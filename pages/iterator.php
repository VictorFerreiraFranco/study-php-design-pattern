<?php

use Study\Design\Collection\Book;
use Study\Design\Collection\BookCollection;

renderHeaderPage(
    'Resultado do design pattern Iterator',
    'O Iterator é um padrão de projeto comportamental que permite percorrer os elementos de uma coleção (lista, árvore, conjunto, etc.) sem expor sua estrutura interna. Ele separa a lógica de iteração da coleção em si, criando um objeto dedicado chamado iterador, responsável por acessar os elementos de forma sequencial.',
    'src/Collection'
);

$books = new BookCollection();
$books->add(new Book("Clean Code"));
$books->add(new Book("Design Patterns"));

$books->add(new stdClass());

/** @var array<Book> $books */
foreach ($books as $book) {
    echo $book->getTitle()."<br/>";
}

renderFooterPage();