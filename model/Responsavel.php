<?php 

require_once("Pessoa.php");
require_once("IPessoa.php");

class Responsavel extends Pessoa implements IPessoa{

    private string $endereco;
    private string $telefone;


    /**
     * Get the value of endereco
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of telefone
     */
    public function getTelefone(): string
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     */
    public function setTelefone(string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }
} 