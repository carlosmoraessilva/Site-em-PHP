<?php

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}
/**
 * Description of StsContato
 *
 * @copyright (c) year, Carlos Moraes  
 * 
 * 
 */
class StsContato 
{
    private $Resultado;
    private $Dados;
    
    public function cadContato(array $Dados)
    {
        $this->Dados = $Dados;
        $cadContato = new \Sts\Models\helper\StsCreate();
        $cadContato->exeCreate('sts_contatos', $this->Dados);
    }
    
}
