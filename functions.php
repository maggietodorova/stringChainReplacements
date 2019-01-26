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
            // echo $first. ' ' . $last . '<br>'
        // if (strlen($stringArray[$i+1]) ===1) {
        //     $j = $i + 1;
        //     while (strlen($stringArray[$j]) === 1 && $j < count($stringArray) - 1) {
        //         if ($stringArray[$i][strlen($stringArray[$i]) - 1] == $stringArray[$j][0]){
        //             $counter -= 1;
        //         }
        //     }
        // }
    }
    // echo 'c - ' . $c . '<br>';
    return $counter;
}

echo stringChainReplacements(["abc", 
"def", 
"ghi"]);