<?php


namespace App;

use App\Extrator\Arquivo;
class Leitor {
    private string $diretorio;
    private string $arquivo;

    public function getArquivo(): string{
        return $this->arquivo;
    }
    public function setArquivo(string $arquivo) {
        $this->arquivo = $arquivo;
    }

    public function getDiretorio() : string{
        return $this->diretorio;
    }
    public function setDiretorio(string $diretorio): void {
        $this->diretorio = $diretorio;
    }

    public function lerArquivo() : array {
        $caminho = $this->getDiretorio(). "/". $this->getArquivo();
        
        $extensao = explode(".", $this->getArquivo());
        $classe = "\App\\Extrator\\" . strtoupper($extensao[1]);
        return call_user_func_array([new $classe, 'lerArquivo'],  [$caminho]);
    }
}