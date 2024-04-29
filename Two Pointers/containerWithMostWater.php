<?php

// https://leetcode.com/problems/container-with-most-water/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height)
    {
        $leftPointer = 0;
        $rightPointer = count($height) - 1;
        $maxArea = 0;
        while($leftPointer < $rightPointer){
            $currentArea = min($height[$leftPointer], $height[$rightPointer]) * ($rightPointer - $leftPointer);
            $maxArea = max($maxArea, $currentArea);
            if($height[$leftPointer] < $height[$rightPointer]){
                $leftPointer++;
            }else{
                $rightPointer--;
            }
        }
        return $maxArea;
    }
}


$solution = new Solution();
$height = [1, 8, 6, 2, 5, 4, 8, 3, 7];
echo ($solution->maxArea($height) == 49 ? "PASSED" : "FAILED") . PHP_EOL;

$height = [1, 1];
echo ($solution->maxArea($height) == 1 ? "PASSED" : "FAILED") . PHP_EOL;

$height = [1, 1, 2];
echo ($solution->maxArea($height) == 2 ? "PASSED" : "FAILED") . PHP_EOL;