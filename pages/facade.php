<?php

use Study\Design\Shop\Facade\OrderFacade;
use Study\Design\Shop\Models\Client;
use Study\Design\Shop\Models\Order;
use Study\Design\Shop\Models\Product;

renderHeaderPage(
    'Resultado do design pattern Facade',
    'O Facade fornece uma interface simplificada para um sistema complexo. Ele esconde os detalhes internos e expõe apenas os métodos essenciais para o cliente. Isso deixa o uso mais fácil e reduz o acoplamento com o subsistema. É como ter um atendente que resolve várias coisas para você em vez de falar diretamente com cada departamento.',
    'src/Shop'
);

$orderFacade = new OrderFacade(
    new \Study\Design\Shop\Services\InventoryService(),
    new \Study\Design\Shop\Services\PaymentService(),
    new \Study\Design\Shop\Services\InvoiceService(),
    new \Study\Design\Shop\Services\NotificationService()
);

$client = new Client(
    'Victor',
    'email@text.com'
);

$product = new Product(
    'Sabonete'
);

$order = new Order(
    $product,
    30,
    $client
);

$orderFacade->placeOrder($order);

renderFooterPage();
