<?php
// Exercício 2 - Sobrescrita de Métodos (Polimorfismo inicial)

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
        echo "Nome: {$this->nome}" . PHP_EOL;
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . PHP_EOL;
        echo "Bônus: R$ " . number_format($this->calcularBonus(), 2, ',', '.') . PHP_EOL;
    }
}

class Gerente extends Funcionario
{
    // Sobrescreve o método da classe base: gerente recebe 20%
    public function calcularBonus(): float
    {
        return $this->salario * 0.20;
    }
}

class Desenvolvedor extends Funcionario
{
    // Sobrescreve o mesmo método: desenvolvedor recebe 15%
    public function calcularBonus(): float
    {
        return $this->salario * 0.15;
    }
}

$gerente = new Gerente("João", 10000);
$desenvolvedor = new Desenvolvedor("Maria", 8000);

$gerente->exibirDados();
echo PHP_EOL;
$desenvolvedor->exibirDados();
