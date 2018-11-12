<?php

include('funcionario.php');

$data=new Data(12,12,2001);

$funcionario=new Funcionario();
$funcionario->nome='Jeremias';
$funcionario->departamento='RH';
$funcionario->salario=1200;
$funcionario->dataEntrada=$data;
$funcionario->CPF='129.006.469-56';
$calculoGanhoAnual=$funcionario->calculoGanhoAnual();

$funcionario2=new Funcionario();
$funcionario2->nome='Matias';
$funcionario2->departamento='Produção';
$funcionario2->salario=2200;
$funcionario2->dataEntrada=new Data(13,12,2001);
$funcionario2->CPF='035.345.213-86';
$calculoGanhoAnual2=$funcionario2->calculoGanhoAnual();



echo"<pre>";
echo"Teste 1 \n";

$funcionario->mostra();



