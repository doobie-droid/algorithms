<?php

// https://leetcode.com/problems/h-index/description/?envType=study-plan-v2&envId=top-interview-150


class Solution
{

    /**
     * @param Integer[] $citations
     * @return Integer
     */
    function hIndex($citations)
    {
    }
}


$solution = new Solution();
$nums = [3, 0, 6, 1, 5];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->canJump($nums)) . PHP_EOL;
$nums = [1, 3, 1];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->canJump($nums)) . PHP_EOL;
