<?php
function solution($A) {
    // write your code in PHP5.5
    $p2 = array_sum($A);
    $len = count($A);
    $p1 = 0;
    $min_diff = null;
    for($p = 1; $p < $len; $p++) {
        $cur_p = $A[$p-1];
        $p1 = $p1 += $cur_p;
        $p2 = $p2 - $cur_p;
        
        $diff = abs($p2 - $p1);
        if($diff < $min_diff || $min_diff === null) {
            $min_diff = $diff;
        }
    }
    
    return $min_diff;
}