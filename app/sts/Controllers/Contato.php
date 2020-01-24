<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Contato
 *
 * @copyright (c) year, Carlos Moraes
 */
class Contato
{

    private $Dados;

    public function index()
    {
        $this->Dados = ['nome' => 'Rodrigo', 'email' => 'rodrigo@gmail.com.br', 'assunto' => 'teste5', 'mensagem' => 'msg teste 1', 'created' => date('Y-m-d H:i:s')];
        //var_dump($this->Dados);
        $cadContato = new \Sts\Models\StsContato();
        $cadContato->cadContato($this->Dados);
    }

}
