<?php

use App\Leitor;

require __DIR__."/vendor/autoload.php";
// ------------------ CVS
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__."/arquivos");
$leitorTXT->setArquivo("dados.csv");
$arr_txt = $leitorTXT->lerArquivo();

// ------------------ TXT

$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__."/arquivos");
$leitorCSV->setArquivo("dados.txt");
$arr_csv = $leitorCSV->lerArquivo();

// Merge entre csv e txt
echo "<pre>";
print_r(array_merge($arr_txt, $arr_csv));
echo "<pre>";