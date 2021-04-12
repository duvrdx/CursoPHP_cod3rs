<div class="titulo">Tipo String</div>

<?php
echo 'Eu dou uma string';
echo '<br>';

var_dump("Eu também");
echo '<br>';

// Concatenação no PHP
echo 'Nós também' . ' somos' . '<br>';
echo 'Número é: ' . 123 ;
echo '<br>', "Também aceito", " vírgulas";
echo '<br>';

echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a função print");
print"<br>Também existe a função print";

// Funções de String

echo '<br>' . strtoupper('maximizado'); // Função que retorna todas as letras como minúsculas

echo '<br>' . strtolower('MINIMIZADO'); // "" que retorna todas as letras como maiúsculas

echo '<br>' . ucfirst('só a primeira letra'); // "" que deixa somente a primeira letra da String como Maiúscula

echo '<br>' . ucwords('todas as palavras'); // "" que deixa a primeira letra de todas as palavras como Maiúscula

echo '<br>' . strlen( 'Quantas letras'); // "" para contar a quantidade de caracteres da String, inclusive acentos

echo '<br>' . mb_strlen("Eu também", "utf-8"); // "" para contar a quantidade de caracteres da String, não contando acentos

echo '<br>' . substr('Só uma parte mesmo', 7, 6); // "" que retorna apenas a parte selecionada da String

echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); // "" que substitui palavras