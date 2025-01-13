<?php
echo 'Normal<br>';
$vetor = array(12,23,69,32,12);
for ($i=0; $i < count($vetor); $i++) { 
    echo $vetor[$i], '<br>';
}

echo 'Com tipos diferentes<br>';
$vetor = array(12,23.3,69,'Kayky',32,12);
for ($i=0; $i < count($vetor); $i++) { 
    echo $vetor[$i], '<br>';
}

echo 'Especificando os indices (foreach simples)<br>';
$vetor = array(10 => 12,23.3,20 => 69,'Kayky',32,12);
foreach ($vetor as $valor) {
    echo $valor, '<br>';
}

echo 'Especificando os indices (foreach composto)<br>';
$vetor = array(10 => 12,23.3,20 => 69,'Kayky',32,12);
foreach ($vetor as $key => $valor) {
    echo $key, '; ', $valor, '<br>';
}

echo 'Vetor criado com indices textuais<br>';
$vetor = array(
    'nome' => 'Pedro',
    'sobrenome' => 'Matias',
    'idade' => 45
);

foreach ($vetor as $key => $value) {
    echo $key, ': ', $value, '<br>';
}

echo 'Vetor criado com colchetes<br>';
$vetor = [
    'nome' => 'Pedro',
    'sobrenome' => 'Matias',
    'idade' => 45
];

foreach ($vetor as $key => $value) {
    echo $key, ': ', $value, '<br>';
}

echo 'Vetor criado por demanda<br>';
$v2['nome'] = 'Carlos';
$v2['idade'] = 87;
$v2[] = 36.9;
foreach ($v2 as $i => $v) {
    echo $i, ': ', $v, '<br>';
}