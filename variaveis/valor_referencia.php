<div class="titulo">Valor x Referência</div>

<?php

    // Atribuição por Valor

    $variavel ='valor inicial';
    echo $variavel;

    $variavelValor = $variavel;
    echo "<br>$variavelValor";

    $variavelValor = 'novo valor';
    echo "<br>$variavelValor";
    echo "<br>$variavel";

    // Atribuição por Referência

    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referência';

    echo "<br> $variavel $variavelReferencia";