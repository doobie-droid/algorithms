<?php

// https://leetcode.com/problems/maximum-subarray/description/

// To understand solution, give Kadane's algorithm a second look
// https://www.youtube.com/watch?v=86CQq3pKSUw
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxSubArray($nums)
    {
        $maxSumPossibleAtSpecificIndex = [];
        $maxSumPossibleAtSpecificIndex[] = $nums[0];
        $absoluteMax = $nums[0];
        for ($i = 1; $i < count($nums); $i++) {
            $previousMaxSum = $maxSumPossibleAtSpecificIndex[$i - 1];
            $indexValue = $nums[$i];
            $maxSumAtIndex =  $previousMaxSum + $indexValue > $indexValue ? $previousMaxSum + $indexValue : $indexValue;
            $maxSumPossibleAtSpecificIndex[] = $maxSumAtIndex;
            $absoluteMax = $absoluteMax > $maxSumAtIndex ? $absoluteMax : $maxSumAtIndex;
        }
        return $absoluteMax;
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
