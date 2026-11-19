# Exercícios PHP - Sistema de Funcionários

Projeto com três exercícios de Programação Orientada a Objetos (POO), usando PHP.

## Conteúdo

- `exercicio1.php` — herança básica: `Funcionario`, `Gerente` e `Desenvolvedor`.
- `exercicio2.php` — sobrescrita do método `calcularBonus()`.
- `exercicio3.php` — polimorfismo com um array de funcionários e `foreach`.

## Regras implementadas

- Na classe base `Funcionario`, o bônus padrão é de 10% do salário.
- Na classe `Gerente`, o bônus é sobrescrito para 20%.
- Na classe `Desenvolvedor`, o bônus é sobrescrito para 15%.

## Como executar

É necessário ter PHP instalado.

No terminal, entre na pasta do projeto e execute:

```bash
php exercicio1.php
php exercicio2.php
php exercicio3.php
```

## Exemplo de valores usados

- João (Gerente): salário de R$ 10.000,00.
- Maria (Desenvolvedora): salário de R$ 8.000,00.

No exercício 2 e no exercício 3, os bônus desses exemplos são:
- João: R$ 2.000,00 (20%).
- Maria: R$ 1.200,00 (15%).
