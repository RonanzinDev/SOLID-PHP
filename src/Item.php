<?php

namespace App;

class Item {
    private string $descricao;
    private int $valor;

    public function __construct()
    {
        $this->descricao = '';
        $this->valor = 0;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setDescricao(string $descricao) {
        $this->descricao = $descricao;
    }

    public function setValor(float $valor) {
        $this->valor = $valor;
    }

    public function itemValido(): bool {
        if($this->descricao == "" or $this->valor <= 0) {
            return false;
        }
        return true;
    }
}