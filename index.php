<?php
<<<<<<< HEAD

function stringChainReplacements($stringArray) {
    if(count($stringArray) <= 1) {
        return 0;
    }

    $counter = 0;

    for($i = 0; $i < count($stringArray) - 1; $i += 1) {
        $first = substr($stringArray[$i + 1], 0, 1);
        $last = substr($stringArray[$i], -1);
        if(strlen($stringArray[$i]) > 1 && strlen($stringArray[$i + 1]) > 1) {
            if($last !== $first) {
                $counter += 1;
            }  
        } else {
            if($first !== $last) {
                $stringArray[$i] = $stringArray[$i + 1];
                $counter += 1;
            }
        }
    
    return $counter;
}
}
echo stringChainReplacements(["abc", "a", "b", "c", "def", "g", "ghi"]);