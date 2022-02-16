<?php

class Padre{
    function metodoPadre(){
        echo "desde el padre";
    }
}

class HIjo extends Padre{
    function metodoPadre(){
        echo "desde el hijo";
    }

    function otroMetodo(){
       parent::metodoPadre();
    }
}
//$objeto = new Padre();
$objeto = new HIjo();
//$objeto->metodoPadre();
$objeto->otroMetodo();

/*========================METODOS ESTATICOS=====================*/

class otrClase{
    static function metodoSinObjeto(){
        echo "<br>" . "Sin objeto";
    }
}
otrClase::metodoSinObjeto();