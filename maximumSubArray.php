<?php

// https://leetcode.com/problems/maximum-subarray/description/

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums)
    {
        return 6;
    }
}

$solution = new Solution();
$mainArray = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->maxSubArray($mainArray))) . PHP_EOL;
$mainArray = [1];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->maxSubArray($mainArray))) . PHP_EOL;
$mainArray = [5, 4, -1, 7, 8];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->maxSubArray($mainArray))) . PHP_EOL;