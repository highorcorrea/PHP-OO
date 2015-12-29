<?php

/**
 * Class Cliente
 */
class Cliente
{
    public $nome;
    public $sexo;
    public $cpf;
    public $endereco;
    public $dataNascimento;

    /**
     * Cliente constructor.
     * @param $nome
     * @param $sexo
     * @param $cpf
     * @param $endereco
     * @param $dataNascimento
     */
    public function __construct($nome, $sexo, $cpf, $endereco, $dataNascimento)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->dataNascimento = $dataNascimento;
    }

}