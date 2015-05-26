<?php

// you can use print for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    if(!$A) {
        return 1;
    }
    
    sort($A);

    $A = array_unique($A);
    
    $len = count($A);
    if($len == 1) {
    	return $A[0] + 1;
    }

    $min_index = 0;
    $max_index = $len;

    if($A[$max_index - 1] == $len) {
        return $A[$max_index - 1] + 1;
    }
   
    while($max_index - $min_index != 1)
    {
    	
    	$median = getMedian($min_index, $max_index);
    	$median += $min_index;
        if( $A[$median] == $median + 1 ) {
        	$min_index = $median;
        } else {
        	$max_index = $median;
        }
    }

    return $A[$max_index] - 1;
}
function getMedian($min, $max) {
	$m = intval(($max - $min) / 2);
	return $m%2==0 ? $m - 1 : $m;
}


// echo solution([2,1,3,5]) . PHP_EOL;
// echo solution([]) . PHP_EOL;
// echo solution([2]) . PHP_EOL;
// echo solution([1,3]) . PHP_EOL;
// echo solution([1,2,3,4]) . PHP_EOL;
// echo solution([1,2,3,4,6,7,8,9,10,11]) . PHP_EOL;
$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,20,21,22,23,24,25,26];
echo solution($arr) . PHP_EOL;
// if(solution($arr) == 4) {
// 	echo "Yeah Its Correct " . PHP_EOL;
// }

// $arr = [2,1,3,5,4,9,6,10,8];
// if(solution($arr) == 8) {
// 	echo "Yeah Its Correct " . PHP_EOL;
// }

// echo solution($arr) . PHP_EOL;
