<?php

namespace App\Extrator;

class CSV extends Arquivo {
    public function lerArquivo($caminho) : array {
            $handle = fopen($caminho, "r");
            while(($linha = fgetcsv($handle, 10000, ";")) !== false) {
                $this->setDados($linha[0], $linha[1], $linha[2]);
    
            }
            fclose($handle);
            return $this->getDados();
        }
}