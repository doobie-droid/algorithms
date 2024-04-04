<?php
// https://leetcode.com/problems/candy/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[] $ratings
     * @return Integer
     */
    function candy($ratings)
    {
    }
}


$solution = new Solution();
$mainArray = [1, 0, 2];
echo (json_encode($mainArray)) . PHP_EOL;
echo ($solution->candy($mainArray)) . PHP_EOL;
$mainArray = [1, 2, 2];
echo (json_encode($mainArray)) . PHP_EOL;
echo ($solution->candy($mainArray)) . PHP_EOL;
