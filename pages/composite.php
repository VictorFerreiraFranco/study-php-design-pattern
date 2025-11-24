<?php

use \Study\Design\FileSystem\Directory;
use Study\Design\FileSystem\File;

renderHeaderPage(
    'Resultado do design pattern Composite',
    'O Composite é ideal para trabalhar com estruturas em árvore, onde partes individuais e coleções precisam ser tratadas da mesma forma. Ele permite que você trate um objeto único e um grupo de objetos de maneira uniforme. Isso é muito útil em sistemas como exploradores de arquivos, onde uma pasta pode conter outras pastas ou arquivos, mas todos podem ser percorridos e manipulados da mesma maneira.',
    'src/FileSystem'
);

$systemDirectory = new Directory('System');
$systemDirectory->add(new File('test.txt', 5));
$systemDirectory->add(new File('folha.pdf', 23));
$systemDirectory->add(new File('index.php', 10));

$documentDirectory = new Directory('Document');
$documentDirectory->add(new File('test2.txt', 20));

$systemDirectory->add($documentDirectory);

echo "Tamanho da pasta System: {$systemDirectory->getSize()}";

echo "<br/>";

echo "Tamanho da pasta Document: {$documentDirectory->getSize()}";

renderFooterPage();
