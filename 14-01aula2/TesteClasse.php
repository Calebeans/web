<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testes Classes</h1>

<?php
class Teste {
    private $codigo;
    private $nome;

    public function __construct($nome, $codigo = null) {
        $this->nome = $nome;
        $this->codigo = $codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

$obj = new Teste('Lucio Silas', 12345);
var_dump($obj->getnome());
?>  
</body>
</html>

