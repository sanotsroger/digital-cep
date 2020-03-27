<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use sanotsroger\DigitalCep\BuscaCep;

class BuscaCepTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */
    public function testBuscaEnderecoPorCepUsoPadrao(string $cep, array $esperado)
    {
        $busca = new BuscaCep();
        $resultado = $busca->buscaEnderecoPorCep($cep);

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste()
    {
        return [
            'Praça da Sé' => [
                '01001000',
                [
                    'cep' => '01001-000',
                    'logradouro' => 'Praça da Sé',
                    'complemento' => 'lado ímpar',
                    'bairro' => 'Sé',
                    'localidade' => 'São Paulo',
                    'uf' => 'SP',
                    'unidade' => '',
                    'ibge' => '3550308',
                    'gia' => '1004'
                ]
            ],
            'Pradópolis' => [
                '14850000',
                [
                    'cep' => '14850-000',
                    'logradouro' => '',
                    'complemento' => '',
                    'bairro' => '',
                    'localidade' => 'Pradópolis',
                    'uf' => 'SP',
                    'unidade' => '',
                    'ibge' => '3540903',
                    'gia' => '5575'
                ]
            ]
        ];
    }
}
