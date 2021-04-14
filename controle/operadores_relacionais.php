<div class="titulo">Operadores Relacionais</div>

<style>
    p{
        margin-bottom: 0;
    }

    hr{
        margin-top: 0;
    }    

</style>

<?php
var_dump(1 == 1); // false
var_dump(1 > 1); // true
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false
var_dump(111 != '111'); // true
var_dump(111 !== '111'); // false

echo '<p> Relacionais no If/Else</p><hr>';

$idade = 15;

if ($idade < 18) {
    echo "Menor de idade = $idade anos!";
} else if ($idade < 65) {
    echo "Adulto = $idade anos!";
} else {
    echo "Terceira idade = $idade anos!";
};

echo '<p> Spaceship</p><hr>';
var_dump(500<=>3); // Se o da esquerda for maior, resultado = 1
var_dump(50<=>50); // Se os valores forem iguais, resultado = 0
var_dump(5<=>50); // Se o da direta for maior, resultado = -1

echo '<p> Valores pode ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");