<?php

class Pessoa {
    protected string $nome;
    protected int $idade;
    protected string $sexo;
    protected string $cpf;
    protected string $email;

    public function sexo() {
        if($this->sexo == "M"){
            return "Masculino";
        }

        else{
            return "Feminino";
        }
    }

    public function verRegistros()
{
    global $alunos;

    $index = readline("Selecione o aluno para ver os registros de catraca: ");
    if (isset($alunos[$index])) {
        $registros = $alunos[$index]->getLogCatraca();
        print "Registros do aluno " . $alunos[$index]->getNome() . ":\n";
        foreach ($registros as $registro) {
            print $registro . "\n";
        }
    } else {
        print "Aluno não encontrado.\n\n";
    }
}

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): self {
        $this->idade = $idade;
        return $this;
    }

    public function getSexo(): string {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self {
        $this->sexo = $sexo;
        return $this;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self {
        $this->cpf = $cpf;
        return $this;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }
}
