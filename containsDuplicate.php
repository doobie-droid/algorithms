<?php

// https://leetcode.com/problems/contains-duplicate/description/

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums)
    {
        $containsDuplicate = [];
        foreach ($nums as $num) {
            if (isset($containsDuplicate[$num])) {
                return true;
            }
            $containsDuplicate[$num] = true;
        }
        return false;
    }
}
$solution = new Solution();
$mainArray = [1, 2, 3, 1];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->containsDuplicate($mainArray))) . PHP_EOL;
$mainArray = [1, 2, 3, 4];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->containsDuplicate($mainArray))) . PHP_EOL;
$mainArray = [1, 1, 1, 3, 3, 4, 3, 2, 4, 2];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->containsDuplicate($mainArray))) . PHP_EOL;
