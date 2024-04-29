<?php

// https://leetcode.com/problems/longest-consecutive-sequence/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums)
    {
        sort($nums);
        echo json_encode($nums).PHP_EOL;
        $seenNumbers = [];
        $counter = 0;
        $maxCounter = 0;
        foreach ($nums as $index => $num) {
            
            if (array_key_exists($num, $seenNumbers)) {
                continue;
            }
            $previousNumber =  isset($nums[$index - 1]) ? $nums[$index - 1] : $num - 1;
            $seenNumbers[$num] = true;
            if ($previousNumber == $num - 1) {
                $counter++;
            } else {
                $counter = 1;
            }
            $maxCounter = $maxCounter > $counter ? $maxCounter : $counter;

            
        }
        return $maxCounter;
    }
}


$solution = new Solution();
$nums = [100, 4, 200, 1, 3, 2];
echo ($solution->longestConsecutive($nums) == 4 ? "PASSED" : "FAILED") . PHP_EOL;

$nums = [0, 3, 7, 2, 5, 8, 4, 6, 0, 1];
echo ($solution->longestConsecutive($nums) == 9 ? "PASSED" : "FAILED") . PHP_EOL;

$nums = [9, 1, 4, 7, 3, -1, 0, 5, 8, -1, 6,25];
echo ($solution->longestConsecutive($nums) == 7 ? "PASSED" : "FAILED") . PHP_EOL;

