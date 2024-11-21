<?php

require_once("Pessoa.php");
require_once("IPessoa.php");

class Aluno extends Pessoa implements IPessoa{
    private $logCatraca = array();

    public function passarCatraca() {
        $registro = date("Y-m-d H:i:s");
        $this->logCatraca[] = $registro;
        print "Registro adicionado para aluno " . $this->nome . " em " . $registro . "\n\n";
    }

    public function getLogCatraca() {
        return $this->logCatraca;
    }
}