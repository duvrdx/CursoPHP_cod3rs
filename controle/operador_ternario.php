<div class="titulo">Operador Ternário</div>

<?php

$idade = 265;
$status;

$status = $idade>=18 ? 'Maior de idade' : 'Menor de idade';
echo "$status<br>";

$tipoMaiorIdade = $idade>=65 ? "Aposentado" : "Maior de Idade";

$status = $idade>=18 ? $tipoMaiorIdade : "Menor de Idade";

echo "$status<br>";