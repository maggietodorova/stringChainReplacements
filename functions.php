<?php

function stringChainReplacements($stringArray) {
    if(count($stringArray) <= 1) {
        return 0;
    }
    
    $counter = 0;
    $c = 0;
    for($i = 0; $i < count($stringArray) - 1; $i += 1) {
        $first = $stringArray[$i + 1][0];
        $last = $stringArray[$i][-1];
        if($last !== $first) {
            $counter += 1;
        }  
    return $counter;
}

echo stringChainReplacements(["abc", 
"def", 
"ghi"]);