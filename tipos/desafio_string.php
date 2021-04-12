<div class="titulo">Desafio String</div>

<?php

/*

Enunciado:

Avaliando os métodos da documentação da string,
qual o método que a posição do texto 'abc'
na string '!AbcaBcabc' retorne 1?

*/

echo strpos('!AbcaBcabc', 'abc'), '<br>'; // Retorna 7 pois essa função é Case Sensitive, ou seja, importa se é maiúscula ou minúscula

echo stripos('!AbcaBcabc', 'abc'), '<br>'; // Retorna 1 pois essa função não é Case Sensitive

echo strpos(strtolower('!AbcaBcabc'), 'abc'), '<br>'; // Método alternativo de resolução