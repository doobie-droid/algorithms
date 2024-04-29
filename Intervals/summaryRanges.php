<?php


// https://leetcode.com/problems/summary-ranges/?envType=study-plan-v2&envId=top-interview-150


class Solution
{

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function summaryRanges($nums)
    {
        $start = $end = 0;
        $solutionArray = [];
        foreach ($nums as $index => $element) {
            $nextElement = isset($nums[$index + 1]) ? $nums[$index + 1] : $element;
            if (($element + 1) == $nextElement) {
                $end = $index + 1;
                continue;
            } else {
                $solutionArray[] = $start == $end ? sprintf("%s", $nums[$start]) : sprintf("%s->%s", $nums[$start], $nums[$end]);
                $start = ++$end;
            }
        }
        return $solutionArray;
    }
}

$solution = new Solution();
$nums = [0, 1, 2, 4, 5, 7];
echo ($solution->summaryRanges($nums) == ["0->2", "4->5", "7"] ? "PASSED" : "FAILED") . PHP_EOL;

$nums = [0, 2, 3, 4, 6, 8, 9];
echo ($solution->summaryRanges($nums) == ["0", "2->4", "6", "8->9"] ? "PASSED" : "FAILED") . PHP_EOL;

$nums = [];
echo ($solution->summaryRanges($nums) == [] ? "PASSED" : "FAILED") . PHP_EOL;

$nums = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
echo ($solution->summaryRanges($nums) == ["0->9"] ? "PASSED" : "FAILED") . PHP_EOL;
