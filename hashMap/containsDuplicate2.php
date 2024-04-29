<?php

// https://leetcode.com/problems/contains-duplicate-ii/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k)
    {
        $hashMap = [];
        foreach ($nums as $index => $num) {
            if(!isset($hashMap[$num])){
                $hashMap[$num] = $index;
                continue;
            }
            $indicialDifference = $index - $hashMap[$num];
            if ($indicialDifference <= $k) {
                return true;
            }else{
                $hashMap[$num] = $index;
            }
        }
        return false;
    }
}

$solution = new Solution();
$nums = [1, 2, 3, 1];
$k = 3;
echo ($solution->containsNearbyDuplicate($nums, $k) == true ? "PASSED" : "FAILED") . PHP_EOL;

$nums = [1, 0, 1, 1];
$k = 1;
echo ($solution->containsNearbyDuplicate($nums, $k) == true ? "PASSED" : "FAILED") . PHP_EOL;

$nums = [1, 2, 3, 1, 2, 3];
$k = 2;
echo ($solution->containsNearbyDuplicate($nums, $k) == false ? "PASSED" : "FAILED") . PHP_EOL;
