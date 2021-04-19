<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km_milha">Km > Milha</option>
        <option value="milha_km">Milha > Km</option>
        <option value="metro_km">Metros > Km</option>
        <option value="km_metro">Km > Metro</option>
        <option value="f_c">Fahrenheit > Celsius</option>
        <option value="c_f">Celsius > Fahrenheit</option>
    </select> 

    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php 
$valorInput = $_POST['param'];
$conversao = $_POST['conversao'];
define('FORMULA_KM_MILHA', 1.609); 
define('FORMULA_METROS_KM', 1000);

if(isset($_POST['param']) and isset($_POST['conversao'])){
    switch($conversao){

        case 'km_milha':
            $resultado = $valorInput / FORMULA_KM_MILHA;
        break;

        case 'milha_km':
            $resultado = $valorInput * FORMULA_KM_MILHA;
        break;

        case 'metro_km':
            $resultado = $valorInput / FORMULA_METROS_KM;
        break;

        case 'km_metros':
            $resultado = $valorInput * FORMULA_METROS_KM;
        break;

        case 'f_c':
            $resultado = ($valorInput - 32) * 5/9;
        break;
        
        case 'c_f':
            $resultado = ($valorInput * 9/5) + 32;
        break;
        
        

    }
    echo "Resultado da conversão: $resultado";
};
