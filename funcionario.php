<?php
class Funcionario
{


    public $nome;
    public $departamento;
    public $salario;
    public $dataEntrada;
    public $CPF;
    public function recebeAumento(){
        $this->salario=$this->salario+($this->salario*0.1);
    }
    public function calculoGanhoAnual(){
        return $this->salario*12;
    }

    public function mostra(){
        echo "O Funcionário ".$this->nome." de CPF :".$this->CPF.", trabalha no departamento ".$this->departamento.", recebendo um salário de R$ ".$this->salario.",00 totalizando um total de R$ ".$this->calculoGanhoAnual().",00 ao ano desde a data de ".$this->dataEntrada."\n";
    }
}



class Data{
    public $dia;
    public $mes;
    public $ano;

    public function  __construct(int $dia,int $mes,int $ano)
    {
        $this->dia=$dia;
        $this->mes=$mes;
        $this->ano=$ano;
    }

    public function __toString()
    {
        $data=$this->dia."/".$this->mes."/".$this->ano;
        return $data;

    }
}








//$funcionario=new Funcionario();
//$funcionario->mostra();
// $usuario = new funcionario();
// $usuario->salario=100;
// $usuario->calculoGanhoAnual();
// echo $usuario->ganhoAnual;