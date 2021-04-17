<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km_milha">Km > Milha</option>
        <option value="milha_km">Milha > Km</option>
        <option value="metro_km">Metros > Km</option>
        <option value="km_metro">Km > Metro</option>
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
        case 'km-milha':
            $resultado = $valorInput / FORMULA_KM_MILHA;
        break;
        case 'milha-km':
            $resultado = $valorInput * FORMULA_KM_MILHA;
        break;
        case 'metro-km':
            $resultado = $valorInput / FORMULA_METROS_KM;
        break;
        default:
            $resultado = $valorInput * FORMULA_METROS_KM;
    }
    echo "Resultado da conversão: $resultado";
};
