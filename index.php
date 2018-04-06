<?php 
    $mass = [-1,-2,-1,-5,3,6,8,45,-3,54,6,7,-6,7,8,-4,5,6,7,16];
    $array = [];
    echo 'Исходные данные: '.json_encode($mass);
    $maxNumber = MaxNumber($mass);
    $i = 0;
    while ($mass[$i].'' != ''){
        $array[] = $mass[$i];
        if (($mass[$i] % 2 == 0) && ($mass[$i] < 0)){
            $array[] = $maxNumber;
        }        
        $i++;
    }
    
    echo '<br> Ответ: '.json_encode($array);

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
    function  MaxNumber ($array){
        $max = $array[0];
        for ($i = 0; $i < counts($array); $i++){
            if ($max < $array[$i]){
                $max = $array[$i];
            }
        }
        return $max;
    }
?>