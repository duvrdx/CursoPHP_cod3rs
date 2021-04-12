<div class="titulo">Operações Aritiméticas</div>

<?php

echo 1+1, '<br>';

var_dump(1+1);

echo '<br>';

echo 1 + 2.5, '<br>'; // Soma

echo 10-2, '<br>'; // Subtração

echo 2 * 5, '<br>'; // Multiplicação

echo 7/4, '<br>'; // Divisão (Com resultados no tipo Float)

echo intdiv(7,4), '<br>'; // Divisão (Com resultados no tipo Int, ignorando as casas decimais)

echo round (7/4), '<br>'; // Divisão (Arredondandando resultados do tip Float, para o tipo Int mais próximo, seja pra cima ou pra baixo)

echo 7 % 4, '<br>'; // Resto de divisões

echo 7 % 2, '<br>'; // Ex: 7/2 = Resta 1

echo 8 % 2, '<br>'; // Ex: 8/2 = Resta 0

echo 7/0, '<br>';  // Erro no PHP, mas não interrompe o código

// echo intdiv(7,0); #Erro no PHP, interrompe o código

echo 4 ** 2, '<br>'; //Exponênciação

// Precedência de operadores:
// () => ** => / * % => + -

echo '<p>Precedência</p>';

echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2,'<br>';