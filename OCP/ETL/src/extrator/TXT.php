<?php

namespace App\Extrator;

class TXT extends Arquivo {
    public function lerArquivo($caminho) : array {
            $handle = fopen($caminho, "r");
            while(!feof($handle)) {
                $linha = fgets($handle);
                $nome = substr($linha, 11, 30);
                $cpf = substr($linha, 11, 30);
                $email = substr($linha, 41, 50);
                $this->setDados($nome, $cpf, $email);
            }
            fclose($handle);
            return $this->getDados();
        }
}