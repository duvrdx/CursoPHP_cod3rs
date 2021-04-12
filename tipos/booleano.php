<div class="titulo">Tipo Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump("false");
echo '<br>'. is_bool(false);
echo '<br>'. is_bool("true");

// Regras de conversões
echo '<p>Regras:</p>';

echo '<br>' . var_dump((bool) 0); // Apenas zero é False

echo '<br>' . var_dump((bool) 20);

echo '<br>' . var_dump((bool) -1);

echo '<br>' . var_dump((bool) 0.0); // False

echo '<br>' . var_dump((bool) 0.0000001); 

echo '<br>' . var_dump((bool) ""); // False

echo '<br>' . var_dump((bool) " "); // True

echo '<br>' . var_dump((bool) "0"); // False

echo '<br>' . var_dump((bool) "00"); // True

echo '<br>' . var_dump(!!"false"); // Conversão utilizando duas negações