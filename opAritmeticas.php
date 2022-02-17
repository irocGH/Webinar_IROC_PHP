<?php
class opAritmeticas{
    function suma($uno, $dos, $tres, $cuatro, $cinco){
        $resultado = $uno + $dos + $tres + $cuatro + $cinco;
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

    function mostrarValor(){
        echo $resultado;
    }
}

$objetoOperaciones = new opAritmeticas();

echo "<br>1.- el resultado es: ".$objetoOperaciones->suma(2,2,2,2,2);
echo "<br>1.- el resultado es: ".$objetoOperaciones->resta(2,2,2,2,2);
echo "<br>1.- el resultado es: ".$objetoOperaciones->multi(2,2,2,2,2);
echo "<br>1.- el resultado es: ".$objetoOperaciones->divide(2,2,2,2,2);