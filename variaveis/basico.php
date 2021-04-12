<div class="titulos">Variáveis</div>

<?php
    $numeroA = 13;
    echo $numeroA, '<br>';
    var_dump($numeroA);

    echo '<br>';
    $a = 3;
    $b = 16;
    $soma = $a + $b;
    echo $soma;

    echo '<br>';
    echo isset ($soma), '<br>';

    unset($soma);
    var_dump($soma);


    $variavel = 10;
    echo '<br>' . $variavel;

    $variavel = "Agora sou uma string";
    echo '<br>' . $variavel;

    // Nomes de variável

    $var = 'válida';
    $var2 = 'válida';
    $VAR3 = 'válida';
    $_var_4 = 'válida';
    $vâr5 = 'válida';
    
    
    /*

    Opções Inválidas

     $5var
     $%var
     $-var

    */