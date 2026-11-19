<?php
// Exercício 3 - Polimorfismo na prática (Lista de objetos)

class Funcionario
{
    protected string $nome;
    protected float $salario;

    public function __construct(string $nome, float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus(): float
    {
        return $this->salario * 0.10;
    }

    public function exibirDados(): void
    {
        echo "Funcionário: {$this->nome}" . PHP_EOL;
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . PHP_EOL;
        echo "Bônus: R$ " . number_format($this->calcularBonus(), 2, ',', '.') . PHP_EOL;
    }
}

class Gerente extends Funcionario
{
    public function calcularBonus(): float
    {
        return $this->salario * 0.20;
    }
}

class Desenvolvedor extends Funcionario
{
    public function calcularBonus(): float
    {
        return $this->salario * 0.15;
    }
}

// Array com objetos de classes diferentes
$funcionarios = [
    new Gerente("João", 10000),
    new Desenvolvedor("Maria", 8000),
    new Gerente("Carlos", 12000),
    new Desenvolvedor("Ana", 6000)
];

// O mesmo código funciona para todos os tipos de funcionário.
// Não precisamos verificar a classe com if ou instanceof.
foreach ($funcionarios as $funcionario) {
    $funcionario->exibirDados();
    echo PHP_EOL;
}
