<?php 

function soma($valor1, $valor2){
    return($valor1+$valor2);
}
function subtracao($valor1, $valor2){
    return($valor1-$valor2);
}
function multiplicacao($valor1, $valor2){
    return($valor1*$valor2);
}
function divisao($valor1, $valor2){
    return($valor1/$valor2);
}



$v1 =40;
$v2 = 20;
$operacao = "divisão";



switch ($operacao){

   
    case "multiplicação": 
        echo ("O resultado é ". multiplicacao($v1, $v2));
        break;
    case "adição": 
        echo ("O resultado é ". adicao($v1, $v2));
        break;
    case "subtração": 
        echo ("O resultado é ". subtracao($v1, $v2));
        break;

    

}

if ($operacao == "divisão" && $v2!=0){
    echo ("O resultado é ". divisao($v1, $v2));
} else if($operacao=="divisão" && $v2==0){
    echo ("Operação impossível de ser realizada");
}




?>