<div class="titulo">Atribuição</div>

<?php

    $title = 'Atribuições';

    $numero = 10;
    echo '<br>' . $numero;

    $numero = $numero - 3;
    echo '<br>' . $numero;

    $numero = $numero + 1.5;
    echo '<br>' . $numero;

    $numero--; // $numero = $numero - 1;
    --$numero; // $numero = $numero - 1;
    echo '<br>' . $numero;

    $numero++; // $numero = $numero + 1;
    ++$numero; // $numero = $numero + 1;
    echo '<br>' . $numero;

    $numero = 20; 
    echo '<br>' . $numero; 

    $numero -= 5; // $numero = $numero - 5; 
    echo '<br>' . $numero;

    $numero += 5; // $numero = $numero + 5;
    echo '<br>' . $numero;

    $numero *= 10; // $numero = $numero * 10;
    echo '<br>' . $numero;

    $numero /= 10; // $numero = $numero / 10;
    echo '<br>' . $numero;

    $numero %= 6; // $numero = $numero % 6;
    echo '<br>' . $numero;

    $numero **= 4; // $numero = $numero ** 4;
    echo '<br>' . $numero;

    $numero .= 4; // Concatenar;
    echo '<br>' . $numero;


    //Strings

    $texto = 'Esse é um texto';
    echo '<br>' . $texto;

    $texto = $texto . ' qualquer';
    echo '<br>' . $texto;

    $texto .= ' de verdade';
    echo '<br>' . $texto;

    // $variavelInexistente = 'valor existente';
    echo '<br>' . $variavelInexistente;

    $valor = $variavelInexistente ?? 'valor default'; // Serve para definir um valor default para variáveis que não "exitem"
    echo '<br>' . $valor;



    