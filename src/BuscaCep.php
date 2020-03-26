<?php

declare(strict_types=1);

namespace sanotsroger\DigitalCep;

class BuscaCep
{
    const URL = 'http://viacep.com.br/ws';

    public function __construct()
    {
        // ...
    }

    public function buscaEnderecoPorCep(string $cep): array
    {
        $cep = preg_replace('/\D/', '', $cep);

        if (strlen($cep) != 8) {
            throw new \Exception('Tamanho do Cep incorreto. Cep: ' . $cep);
        }

        $busca = file_get_contents($this::URL . DIRECTORY_SEPARATOR . $cep . DIRECTORY_SEPARATOR . 'json');

        $resultado = (array) json_decode($busca);

        return $resultado;
    }
}
