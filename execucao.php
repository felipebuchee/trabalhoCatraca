<?php

require_once("model/Aluno.php");
require_once("model/Funcionario.php");
require_once("model/Responsavel.php");

$alunos = [];
$funcionarios = [];
$responsaveis = [];

date_default_timezone_set('America/Sao_Paulo');

function menuPrincipal()
{
    do {
        print "\n ⋇⊶⊰⊱⊷⋇ SISTEMA DE GERENCIAMENTO DE ENTRADAS E SAÍDAS! by: buchinho ⋇⊶⊰⊱⊷⋇ \n";
        print " 1 Aluno \n";
        print " 2 Responsável \n";
        print " 3 Funcionário \n";
        print " 0 Sair \n\n";

        $escolha = readline("Quem está desejando entrar? " . "\n");

        switch ($escolha) {
            case 0:
                print "Até a próxima!\n\n";
                die();

            case 1:
                print "'Aluno' Selecionado!\n\n";
                menuAluno();
                break;

            case 2:
                print "'Responsável' Selecionado!\n\n";
                menuResponsavel();
                break;

            case 3:
                print "'Funcionário' Selecionado!\n\n";
                menuFuncionario();
                break;
            default:
                print "Alternativa inválida! Tente novamente!\n\n";
                break;
        }
    } while ($escolha != 0);
}

function menuAluno()
{
    do {
        print "\n ⋇⊶⊰⊱⊷⋇ MENU DO ALUNO ⋇⊶⊰⊱⊷⋇ \n";
        print " 1 Cadastrar Aluno \n";
        print " 2 Passar Catraca \n";
        print " 3 Ver registros \n";
        print " 0 Voltar para o menu principal \n\n";

        $escolha = readline("Escolha uma opção: " . "\n");

        switch ($escolha) {
            case 0:
                print "Redirecionando...!\n\n";
                menuPrincipal();
                break;

            case 1:
                cadastrarAluno();
                break;

            case 2:
                passarCatraca();
                break;

            case 3:
                $usuario = new Pessoa();
                $usuario->verRegistros();
                break;

            default:
                print "Alternativa inválida! Tente novamente!\n\n";
                break;
        }
    } while ($escolha != 0);
}

function listarAlunos($alunos) {
    foreach ($alunos as $aluno) {
        print $aluno->imprimir();
    }
}


function cadastrarAluno()
{
    global $alunos;

    $nome = readline("Digite o nome do aluno: ");
    $idade = readline("Digite a idade do aluno: ");
    $sexo = readline("Digite o sexo (M/F): ");
    $cpf = readline("Digite o CPF do aluno: ");
    $email = readline("Digite o email do aluno: ");


    $aluno = new Aluno();
    $aluno->setNome($nome)
        ->setIdade($idade)
        ->setSexo($sexo)
        ->setCpf($cpf)
        ->setEmail($email);


    $alunos[] = $aluno;
    print "Aluno cadastrado com sucesso!\n\n";
}

function passarCatraca()
{
    global $alunos;
    print "Selecione o aluno para passar pela catraca.\n";
    foreach ($alunos as $index => $aluno) {
        print "{$index}: {$aluno->getNome()}\n";
    }
    $index = readline("Escolha o índice do aluno: ");
    if (isset($alunos[$index])) {
        $alunos[$index]->passarCatraca();
    } else {
        print "Aluno não encontrado.\n\n";
    }
}

function menuResponsavel()
{
    do {
        print "\n ⋇⊶⊰⊱⊷⋇ MENU DO RESPONSÁVEL ⋇⊶⊰⊱⊷⋇ \n";
        print " 1 Cadastrar Responsável \n";
        print " 2 Ver registros de aluno \n";
        print " 0 Voltar para o menu principal \n\n";

        $escolha = readline("Escolha uma opção: " . "\n");

        switch ($escolha) {
            case 0:
                print "Redirecionando...!\n\n";
                menuPrincipal();
                break;

            case 1:
                cadastrarResponsavel();
                break;

            case 2:
                $usuario = new Pessoa();
                $usuario->verRegistros();
                break;

            default:
                print "Alternativa inválida! Tente novamente!\n\n";
                break;
        }
    } while ($escolha != 0);
}

function cadastrarResponsavel()
{
    global $responsaveis;

    $nome = readline("Digite o nome do responsável: ");
    $cpf = readline("Digite o CPF do responsável: ");
    $email = readline("Digite o email do responsável: ");

    $responsavel = new Responsavel();
    $responsavel->setNome($nome)
        ->setCpf($cpf)
        ->setEmail($email);

    $responsaveis[] = $responsavel;
    print "Responsável cadastrado com sucesso!\n\n";
}

function menuFuncionario()
{
    do {
        print "\n ⋇⊶⊰⊱⊷⋇ MENU DO FUNCIONÁRIO ⋇⊶⊰⊱⊷⋇ \n";
        print " 1 Cadastrar Funcionário \n";
        print " 2 Ver registros de aluno \n";
        print " 0 Voltar para o menu principal \n\n";

        $escolha = readline("Escolha uma opção: " . "\n");

        switch ($escolha) {
            case 0:
                print "Redirecionando...!\n\n";
                menuPrincipal();
                break;

            case 1:
                cadastrarFuncionario();
                break;

            case 2:
                $usuario = new Pessoa();
                $usuario->verRegistros();
                break;

            default:
                print "Alternativa inválida! Tente novamente!\n\n";
                break;
        }
    } while ($escolha != 0);
}

function cadastrarFuncionario()
{
    global $funcionarios;

    $nome = readline("Digite o nome do funcionário: ");
    $idade = readline("Digite a idade do funcionário: ");
    $sexo = readline("Digite o sexo (M/F): ");
    $cpf = readline("Digite o CPF do funcionário: ");
    $email = readline("Digite o email do funcionário: ");

    $funcionario = new Aluno();
    $funcionario->setNome($nome)
        ->setIdade($idade)
        ->setSexo($sexo)
        ->setCpf($cpf)
        ->setEmail($email);

    $funcionarios[] = $funcionario;
    print "Funcionário cadastrado com sucesso!\n\n";
}

menuPrincipal();
