<?php

// https://leetcode.com/problems/jump-game/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums)
    {
    }
}

$solution = new Solution();
$nums = [2, 3, 1, 1, 4];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->canJump($nums)) . PHP_EOL;
$nums = [3, 2, 1, 0, 4];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->canJump($nums)) . PHP_EOL;