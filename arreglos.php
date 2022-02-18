<?php
class opAritmeticas{

    function arreglo(){

        $arreglo = array("Valor 1", "Valor 2", "Valor 3", "Valor 4");
        //echo $arreglo[0];

        $arreglo2 = array(1=>"pos 1", 2=>"pos 2", 0=>"pos x");
        //echo $arreglo2[0];

        $arreglo3[0]="pos cero";
        $arreglo3[4]="pos cuatro";
        //echo $arreglo3[4];

        $arreglo4 = array("pos1"=>"Irving", "pos2"=>"Ramon", "pos3"=>"Talan", "pos4"=>"Zuly");
        echo $arreglo4["pos3"];
    }
    function suma($datosR){
        $resultado = $datosR[0] + $datosR[1] + $datosR[2] +$datosR[3];
        return $resultado;
    }

    function resta($uno, $dos, $tres, $cuatro, $cinco){
        $resultado = $uno - $dos - $tres - $cuatro - $cinco;
        return $resultado;
    }

    function multi($uno, $dos, $tres, $cuatro, $cinco){
        $resultado = $uno * $dos * $tres * $cuatro *$cinco;
        return $resultado;
    }

    function divide($uno, $dos, $tres, $cuatro, $cinco){
        $resultado = $uno / $dos / $tres / $cuatro / $cinco;
        return $resultado;
    }

    /*function mostrarValor(){
        echo $resultado;
    }*/
}
$datos = array(1,2,3,4);

$objeto = new opAritmeticas();
$objeto->arreglo();

//echo "El valor es: ".$objeto->suma($datos);



