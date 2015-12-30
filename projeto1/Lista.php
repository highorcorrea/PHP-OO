<?php

class Lista implements ListaInterface
{
    public function listaCrescente(array $cli)
    {
        $list = self::imprimir($cli);
        return sort($list);
    }

    public function listaDecrescente(array $cli)
    {
        $list = self::imprimir($cli);
        return rsort($list);
    }

    public function imprimir(array $cli)
    {

        $lista = "<ul class=\"list-group\">";


        foreach ($cli as $result) {
            $lista .= "<li class=\"list-group-item\"><a href=\"{$result->nome}\"> {$result->nome}</a></li>";

        }

        $lista .= "</ul>";

        return $lista;
    }

    public function imprimirSelecionado($ref)
    {

        return "";
    }

}