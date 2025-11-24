<?php

use Study\Design\SCAJ\Entity\Process;
use Study\Design\SCAJ\Process\StateStrategy\PenddingStateStrategy;
use Study\Design\SCAJ\Process\TypeStrategy\CLPTypeStrategy;
use Study\Design\SCAJ\Process\TypeStrategy\SectorialTypeStrategy;

renderHeaderPage(
    "Regras do processo",
    "Resultado de vários design patterns para aplicar regras nos procedimentos, variando conforme o tipo e a situação do processo",
    'src/SCAJ'
);

try {
    
    $processClp = new Process(
        '0002.3232',
        new PenddingStateStrategy(),
        new CLPTypeStrategy(),
    );
    
    $processSectorial = new Process(
        '0002.3232',
        new PenddingStateStrategy(),
        new SectorialTypeStrategy(),
    );
    
    echo "<br/> --- Processo CLP --- <br/>";
    var_dump($processClp->canFinalize());
    
    $processClp->requestValidate();
    echo "<br/>";
    $processClp->validade();
    echo "<br/>";
    $processClp->finilize();
    echo "<br/>";
    
    // Gera erro
    // $processClp->validade();
    
    // Gere erro
    // $processSectorial->requestAdjustment();
    
    echo "<br/> --- Processo Serotial --- <br/>";
    var_dump($processSectorial->canFinalize());
    
    $processSectorial->requestValidate();
    echo "<br/>";
    $processSectorial->requestAdjustment();
    echo "<br/>";
    $processSectorial->requestValidate();
    echo "<br/>";
    $processSectorial->validade();
    echo "<br/>";
    
    // Não deve deixar finalizar
    $processSectorial->finilize();
    
} catch (Exception $e)
{
    echo "<br/>";
    echo $e->getMessage();
}

renderFooterPage();
