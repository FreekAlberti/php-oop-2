<?php

class Uomo {
    public $nome;
    public $cognome;
    public $anno;

    function __construct($nome, $cognome, $anno)
        {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->anno = $anno;
        }
    }
    
class Professione extends Uomo {
    public $ruolo;
    public $azienda;
    public $retribuzione;
}

$freek = new Professione("Freek", "Albertie", 1996);
$freek->ruolo = "Frontend Developer";
$freek->azienda = "IBM";
$freek->retribuzione = "1000€";

$sido = new Professione("Sido", "Don", 1996);
$sido->ruolo = "Backend Developer";
$sido->azienda = "Canonical";
$sido->retribuzione = "1100€";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Anno</th>
                <th>Ruolo</th>
                <th>Azienda</th>
                <th>Retribuzione</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $freek->nome ?></td>
                <td><?php echo $freek->cognome ?></td>
                <td><?php echo $freek->anno ?></td>
                <td><?php echo $freek->ruolo ?></td>
                <td><?php echo $freek->azienda ?></td>
                <td><?php echo $freek->retribuzione ?></td>
            </tr>
            <tr>
                <td><?php echo $sido->nome ?></td>
                <td><?php echo $sido->cognome ?></td>
                <td><?php echo $sido->anno ?></td>
                <td><?php echo $sido->ruolo ?></td>
                <td><?php echo $sido->azienda ?></td>
                <td><?php echo $sido->retribuzione ?></td>
            </tr>
        </tbody>
    </table> 
</body>
</html>