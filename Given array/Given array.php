<?php $numbers = array(1,2,3,4,5,6,7,8,9,10);
$k = 3;
echo "The original array is:\n";
print_r($numbers);
echo "The number inside to elminate is:\n";
echo "$k\n";;
extractEachKth($numbers, $k);
function extractEachKth($array, $k){
    $encontrado = null;
    for($i=0;$i<count($array); $i++){
        if ($array[$i] == $k){
            $encontrado = $i;
            
        }
    }
    //echo $encontrado;
    if ($encontrado > 0){
        unset($array[$encontrado]);        
    }
    echo "The new array is:\n";
    print_r($array);
}

//si se requiere conservar los indices, la función puede tener anexado el que construya un nuevo array sin el elemento indicado.