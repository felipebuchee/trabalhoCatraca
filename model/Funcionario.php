<?php

require_once("Pessoa.php");
require_once("IPessoa.php");

class Funcionario extends Pessoa implements IPessoa {

    private string $cargo;
    private int $siape;

    public function getCargo(): string {
        return $this->cargo;
    }

    public function setCargo(string $cargo): self {
        $this->cargo = $cargo;
        return $this;
    }

    public function getSiape(): int {
        return $this->siape;
    }

    public function setSiape(int $siape): self {
        $this->siape = $siape;
        return $this;
    }
}
