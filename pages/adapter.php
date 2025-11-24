<?php

use Study\Design\Payment\APIs\NuBank;
use Study\Design\Payment\APIs\PayPal;

renderHeaderPage(
    'Resultado do design pattern Adapter',
    'O Adapter é como um tradutor. Ele permite que duas classes que não falam a mesma “língua” consigam se comunicar. Isso é útil quando você precisa usar uma classe antiga ou de terceiros, mas a interface dela não bate com o que seu sistema espera. O Adapter cria uma camada no meio que converte chamadas de um formato para outro. Assim, você consegue reaproveitar código existente sem modificar a implementação original.',
    'src/Payment'
);

$payPay = new \Study\Design\Payment\Adapter\PayPalAdapter(new PayPal());
$payPay->pay(120);

echo "<br/>";

$nuBank = new \Study\Design\Payment\Adapter\NuBankAdapter(new NuBank());
$nuBank->pay(400);

renderFooterPage();
