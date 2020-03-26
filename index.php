<?php

declare(strict_types=1);

use sanotsroger\DigitalCep\BuscaCep;

require __DIR__ . '/vendor/autoload.php';

try {
    $busca = new BuscaCep();

    $cep = '01001000';

    $endereco = $busca->buscaEnderecoPorCep($cep);

    echo '<pre>';
    print_r($endereco);
    echo '</pre>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
