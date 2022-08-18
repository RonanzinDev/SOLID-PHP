<?php

use App\Item;
use PHPUnit\Framework\TestCase;
class ItemTest extends TestCase {
    public function testEstadoInicialItem(){
        $item = new Item();
        $this->assertEquals("" ,$item->getDescricao());
        $this->assertEquals(0 ,$item->getValor());
    }

    public function testGetAndSetDescricao(){
        $descricao = "Cadeira de plastico";
        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }
    /** 
    *  @dataProvider dataValores
    */
    public function testGetAndSetValor($valor){
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemValido(){
        $item = new Item();
        $item->setValor(45);
        $item->setDescricao("Alguma coisa");

        $this->assertEquals(true, $item->itemValido());

        $item->setValor(55);
        $item->setDescricao("");

        $this->assertEquals(false, $item->itemValido());
    }

    public function dataValores(){
        return [
            [100],
            [-2],
            [0]
        ];
    }
}