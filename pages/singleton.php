<?php

use Study\Design\Settings\App;

renderHeaderPage(
    'Resultado do design pattern Singleton',
    'O Singleton garante que uma classe tenha apenas uma instância em todo o sistema e fornece um ponto global de acesso a ela. É útil quando você precisa de algo único e centralizado, como um logger, um gerenciador de configuração ou uma conexão de banco de dados. Esse padrão evita que existam múltiplas instâncias conflitantes da mesma coisa.',
    'src/Settings'
);

var_dump(App::getInstance()->getProps()->getHost());

renderFooterPage();