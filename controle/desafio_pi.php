<div class="titulo">Desafio PI</div>

<?php

echo pi();

//Variáveis
$pi = 3.14;


if($pi == pi() || ($pi < pi() && $pi>=3.14)) {
    echo "<br>Iguais!";
} else {
    echo "<br> Diferentes!";
};