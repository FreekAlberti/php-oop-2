<?php

class Uomo {
    public $nome;
    public $cognome;
    public $anno;
    }
    
class Professione extends Uomo {
    public $ruolo;
    public $azienda;
    public $retribuzione;
}

$freek = new Professione();
$freek->nome = "Freek";
$freek->cognome = "Albertie";
$freek->anno = 1996;
$freek->ruolo = "Web Developer";
$freek->azienda = "IBM";
$freek->retribuzione = "1000€";

var_dump($freek);die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php  ?></h1>    
</body>
</html>