<?php

// https://leetcode.com/problems/product-of-array-except-self/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums)
    {
        return 4;
    }
}

$solution = new Solution();
$mainArray = [1, 2, 3, 4];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->productExceptSelf($mainArray))) . PHP_EOL;
$mainArray = [-1, 1, 0, -3, 3];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->productExceptSelf($mainArray))) . PHP_EOL;
$mainArray = [4, 5];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->productExceptSelf($mainArray))) . PHP_EOL;
