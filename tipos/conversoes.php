<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

//Int para Float
echo '<p>Int para Float</p>';

echo '<br>';
var_dump(PHP_INT_MAX + 1);

echo '<br>';
var_dump(1+1.0);

echo '<br>';
var_dump((float) 3 );


// Float para Int

echo '<p>Float para Int</p>';

var_dump((int) 6.8);
echo '<br>';

var_dump(intval(2.8));
echo '<br>';

var_dump((int) round(2.8));
echo '<br>';

// Operações com string

echo '<p>Strings</p>';

var_dump( 3 + "2" );
echo '<br>';

var_dump(3 . "2");
echo '<br>', is_string("3" . 2);
echo '<br>', is_string("3" + 2);

echo '<br>';
var_dump(1+"cinco");

echo '<br>';
var_dump(1 + "5 cinco");

echo '<br>';
var_dump(1 + "cinco 5");

echo '<br>';
var_dump(1 + "3.2");

echo '<br>';
var_dump(1 + "-3.2e2");

echo '<br>';
var_dump((int) + "10.5");