<?php

// https://leetcode.com/problems/minimum-size-subarray-sum/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer $target
     * @param Integer[] $nums
     * @return Integer
     */
    function minSubArrayLen($target, $nums): int
    {
        $leftWindow = 0;
        $rightWindow = 0;
        $totalSum = $nums[$leftWindow];
        $lengthOfArray = count($nums);
        $elementsInWindow = 1;
        $minElementsForSum = $lengthOfArray + 1;
        while ($rightWindow < $lengthOfArray ) { 
            if ($totalSum < $target) {
                $rightWindow++;
                $totalSum +=  isset($nums[$rightWindow]) ? $nums[$rightWindow]: 0 ;
                $elementsInWindow++;
            } else {
                $minElementsForSum = min($minElementsForSum, $elementsInWindow);
                $totalSum -= $nums[$leftWindow];
                $elementsInWindow--;
                $leftWindow++;
            }
        }

        $minElementsForSum =  $minElementsForSum > $lengthOfArray ? 0 : $minElementsForSum;
        echo $minElementsForSum.PHP_EOL;
        return $minElementsForSum;
    }
}


$solution = new Solution();
$target = 7;
$nums = [2, 3, 1, 2, 4, 3];
echo ($solution->minSubArrayLen($target, $nums) == 2 ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$target = 4;
$nums = [1, 4, 4];
echo ($solution->minSubArrayLen($target, $nums) == 1 ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$target = 11;
$nums = [1, 1, 1, 1, 1, 1, 1, 1];
echo ($solution->minSubArrayLen($target, $nums) == 0 ? "PASSED" : "FAILED") . PHP_EOL;
