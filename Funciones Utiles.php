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
    
    function mayor($elem, &$max){
        if($elem > $max) {
            $max = $elem;
        }
    }

    function maxminarray($array, &$max, &$min){
        for ($i=0; $i < count($array); $i++) { 
            if ($i == 0) {
                $min = $array[$i];
                $max = $array[$i];
            } else{
                if($array[$i] < $min) {
                    $min = $array[$i];
                }

                if($array[$i] > $max) {
                    $max = $array[$i];
                }
            }
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

    function brfacha(){
        echo "<br>";
    }

?>