<div class="titulo">Operadores Lógicos</div>
<?php

var_dump(true);
echo '<br>';
var_dump(!true); // False

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";

var_dump(true && true); // True
var_dump(true && false); // False
var_dump(false && true); // False
var_dump(false && false); // False

var_dump(true and true); // True
var_dump(true and false); // False
var_dump(false and true); // False
var_dump(false and false); // False

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";

var_dump(true || true); // True
var_dump(true || false); // True
var_dump(false || true); // True
var_dump(false || false); // True

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";

var_dump(true xor true); // False
var_dump(true xor false); // True
var_dump(false xor true); // True
var_dump(false xor false); // False

var_dump(true != true); // False
var_dump(true != false); // True
var_dump(false != true); // True
var_dump(false != false); // False

echo "<p class='divisao'> Exemplo </p><hr>";

$idae = 67;
$sexo = 'F';

if ($idade >= 60 && $sexo === 'F') {

    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {

    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco';
}

