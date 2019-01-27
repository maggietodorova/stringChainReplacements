<?php

// https://app.codesignal.com/challenge/ZFpmAs8w74eHvoHbA

function stringChainReplacements($stringArray) {
    // Check if the string array have only 1 element
    if(count($stringArray) <= 1) {
        return 0;
    }
    
    // Init counter
    $counter = 0;

    for($i = 0; $i < count($stringArray) - 1; $i += 1) {
        // Last letter of string
        // substr($stringArray[$i], -1)
        $last = $stringArray[$i][-1];
        
        // First letter of the next string
        // substr($stringArray[$i], 0, 1)
        $first = $stringArray[$i + 1][0];
        if($last !== $first) {
            $counter += 1;
        }
    }
    return $counter;
}


'fkkkf'[-1]