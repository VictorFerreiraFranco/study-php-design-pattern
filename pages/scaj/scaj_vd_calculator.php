<?php

use Study\Design\SCAJ\Service\VDService;

renderHeaderPage(
    'Calculo de VDs',
    'Resultado de vários design patterns para contemplar um cálculo complexo de VDs, em que cada um possui suas regras específicas.',
    'src/SCAJ'
);

$vdService = new VdService();
$vdService->calculate();

renderFooterPage();


