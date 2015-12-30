<?php

interface ListaInterface
{
    public function listaCrescente(array $cli);

    public function listaDecrescente(array $cli);

    public function imprimir(array $cli);

    public function imprimirSelecionado($ref);
}