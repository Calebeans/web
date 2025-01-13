<?php
function funcao($msg) {
    echo "Mensagem: $msg <br>";
}

funcao('Kayky');

$f2 = function () {
    echo 'Função sem nome guardada em variável<br>';
};

$f2();

$f3 = fn($x) => $x ** 2;
echo $f3(3);