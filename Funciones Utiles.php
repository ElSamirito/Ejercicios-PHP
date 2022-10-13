<?php
    
    function mostrararray($array){

        echo "[";
        for ($i=0; $i < count($array); $i++) {
            
            if ($i == (count($array) - 1)) {
                echo $array[$i];
            } else {
                echo $array[$i].", ";
            }

        }
        echo "] <br>";
    
    }

    function mostrarmatrix($matrix){
        
        for ($i=0; $i < count($matrix); $i++) { 
            mostrararray($matrix[$i]);
        }

    }

    function parimpar($elem){
        if($elem % 2 == 0) {
            return true;
        }else {
            return false;
        }
    }

    function menor($elem, &$min){
        if($elem < $min) {
            $min = $elem;
        }
    }
    
    function menorarray($array, &$min){
        for ($i=0; $i < count($array); $i++) { 
            if ($min == null) {
                $min = $array[$i];
            }else{
                menor($array[$i], $min);
            }
        }
    }

    function menormatrix($matrix, &$min){
        for ($i=0; $i < count($matrix); $i++) { 
            menorarray($matrix[$i], $min);
        }
    }

    function mayor($elem, &$max){
        if($elem > $max) {
            $max = $elem;
        }
    }

    function mayorarray($array, &$max){
        for ($i=0; $i < count($array); $i++) { 
            if ($max == null) {
                $max = $array[$i];
            }else{
                mayor($array[$i], $max);
            }
        }
    }

    function mayormatrix($matrix, &$max){
        for ($i=0; $i < count($matrix); $i++) { 
            mayorarray($matrix[$i], $max);
        }
    }

    function cantidadenarray($array, $cond, &$cont){
        for ($i=0; $i < count($array); $i++) { 
            if ($array[$i] >= $cond) {
                $cont++;
            }
        }
    }

    function sumarray($array){
        $total = 0;
        
        for ($i=0; $i < count($array); $i++) {
        
            $total += $array[$i];
        
        }

        return $total;
    }

    function promarray($array){
        return (sumarray($array) / count($array));
    }

    function findarray($elem, $array, &$index){
        for ($i=0; $i < count($array); $i++) { 
            if ($array[$i] == $elem) {
                array_push($index, $i+1);
                return true;
            }
        }
    }

    function findmatrix($elem, $matrix){
        $posi = array();

        for ($i=0; $i < count($matrix); $i++) { 
            if (findarray($elem, $matrix[$i], $posi)) {
                array_push($posi, $i+1);
            }
        }

        return $posi;
    }

    function brfacha(){
        echo "<br>";
    }

?>