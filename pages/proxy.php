<?php


use Study\Design\Image\ProxyImage;

renderHeaderPage(
    'Resultado do design pattern Proxy',
    'O Proxy age como um intermediário para outro objeto. Ele expõe a mesma interface, mas adiciona um nível de controle antes de acessar o objeto real. Isso pode ser usado para carregar recursos pesados apenas quando necessários (lazy loading), controlar permissões de acesso, adicionar cache ou registrar chamadas. O cliente muitas vezes nem percebe que está lidando com um proxy.',
    'src/Image'
);

$image = new ProxyImage('foto.png');
$image2 = new ProxyImage('logo.png');

$image->display();
echo "<br />";
$image2->display();
echo "<br />";
$image->display();

renderFooterPage();
