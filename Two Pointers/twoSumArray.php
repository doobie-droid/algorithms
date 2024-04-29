<?php

// https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target)
    {
        $hashMap = [];
        $solutionArray = [];
        foreach ($numbers as $index => $number) {
            $hashMap[$number] = $index;
        }
        foreach ($numbers as $index => $number) {
            $remainderToAdd = $target - $number;
            if (isset($hashMap[$remainderToAdd])) {
                array_push($solutionArray, $index + 1);
                array_push($solutionArray, $hashMap[$remainderToAdd] + 1);
                return $solutionArray;
            }
        }
    }
}

$solution = new Solution();
$numbers = [2, 7, 11, 15];
$target = 9;
echo ($solution->twoSum($numbers, $target) == [1, 2] ? "PASSED" : "FAILED") . PHP_EOL;

$numbers = [2, 3, 4];
$target = 6;
echo ($solution->twoSum($numbers, $target) == [1, 3] ? "PASSED" : "FAILED") . PHP_EOL;

$numbers = [-1, 0];
$target = -1;
echo ($solution->twoSum($numbers, $target) == [1, 2] ? "PASSED" : "FAILED") . PHP_EOL;
