<?php

namespace Model;

class Pedido
{
    //Atributos
    private $codPedido;
    public $ingredientes;
    public $qtde;
    public $pgto;
    public $entrega;

    //Métodos
    public function __construct()
    {
       echo $this->gerarCodigo();
       echo $this->dataDoPedido();
    }

    private function gerarCodigo()
    {
        $this->codPedido = random_int(100, 500);
        return $this->codPedido;
    }
    private function dataDoPedido()
    {
       // date_default_timezone_set("America/Sao_Paulo");
       // return "<br> Data e hora do pedido: " . date ("d / m / y - H : i : s");

    }

    public function darDesconto()
    {
        if ($this->qtde >= 5 && $this->entrega == "Santa Isabel") {
            return "<h2> 10% off </h2>";
        }
    }
    public function verificaSeTemPao()
    {
        //$achou = false;
        foreach($this->ingredientes as $item) {
            if($item == "Pão") {
               
            }
        }
    }
}