<?php

use Study\Design\HTML\components\Div;
use Study\Design\HTML\components\DOCTYPE;
use Study\Design\HTML\components\HTML;
use Study\Design\HTML\components\Input;
use Study\Design\HTML\core\InputType;
use Study\Design\HTML\core\Lang;

renderHeaderPage(
    'Resultado do design pattern Builder',
    'O Builder ajuda na criação de objetos complexos que têm muitos atributos opcionais ou que precisam ser montados passo a passo. Em vez de usar um construtor gigante cheio de parâmetros, você vai adicionando cada parte do objeto por meio de métodos encadeados, até chamar um build no final. É como montar um sanduíche: você escolhe o pão, o recheio, o molho e só depois finaliza.',
    'src/HTML'
);

var_dump(
    [
        DOCTYPE::builder(),
        HTML::builder()
            ->children(
                Div::builder()
                    ->children(
                        Input::builder()
                            ->value('Victor')
                            ->name('input_name')
                            ->id('input_name')
                            ->type(InputType::TEXT)
                    )
                    ->id('div_teste'),
            )
            ->lang(Lang::PT_BR)
    ]
);

echo DOCTYPE::builder();
echo HTML::builder()
    ->children(
        Div::builder()
            ->children(
                Input::builder()
                    ->value('Victor')
                    ->name('name_test')
                    ->id('input_name')
                    ->type(InputType::TEXT),
                'Teste'
            )
            ->id('div_teste'),
    )
    ->lang(Lang::PT_BR);

renderFooterPage();