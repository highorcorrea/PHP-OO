<?php

class Lista implements ListaInterface
{
    public function listaCrescente(array $cli)
    {
        return sort($cli);
    }

    public function listaDecrescente(array $cli)
    {
        return rsort($cli);
    }

}