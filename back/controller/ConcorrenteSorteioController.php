<?php

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 09/09/2016
 * Time: 13:58
 */
class ConcorrenteSorteioController
{
    public function __construct()
    {
        $this->usuario = new Usuario();

        if (isset($_GET["entrar"]) && $_GET['entrar'] == "1") {
            echo $this->usuario->logarUsuario($_GET['email'], $_GET['senha']);
        }
    }
    public function cadastrar()
    {

    }
    public function alterar()
    {

    }
    public function listar()
    {

    }
    public function excluir()
    {

    }
}
new ConcorrenteSorteioController();