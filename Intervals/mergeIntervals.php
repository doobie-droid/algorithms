<?php

// https://leetcode.com/problems/merge-intervals/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals)
    {

        // [[1, 3], [8, 10], [15, 18], [2, 6]]; what the array looks like
        usort($intervals, function ($a, $b) {
            return $this->compareByFirstTerm($a, $b);
        });
        // [[1, 3] , [2, 6],[8, 10], [15, 18]]; what the array looks like now
        $previousEnd = $initialStart =  $intervals[0][0];
        array_push($intervals, [10001, 10001]);
        // [[1, 3], [2, 6], [8, 10], [15, 18] [10001,100001]];.. what we want the array to look like so it can run through all the actual constraints since the last one is never considered
        $solutionArray = [];

        foreach ($intervals as $index => $innerInterval) {
            $start = $innerInterval[0];
            $end = $innerInterval[1];

            if ($start <= $previousEnd) {
                $previousEnd =  $end > $previousEnd ? $end : $previousEnd;
            } else {
                $solutionArray[] = [$initialStart, $previousEnd];
                $initialStart = $start;
                $previousEnd = $end;
            }
        }
        
        return $solutionArray;
    }

    function compareByFirstTerm($a, $b)
    {
        return $a[0] - $b[0];
    }
}

$solution = new Solution();
$intervals = [[1, 3], [2, 6], [8, 10], [15, 18]];
echo ($solution->merge($intervals) == [[1, 6], [8, 10], [15, 18]] ? "PASSED" : "FAILED") . PHP_EOL;

$intervals = [[1, 4], [4, 5]];
echo ($solution->merge($intervals) == [[1, 5]] ? "PASSED" : "FAILED") . PHP_EOL;

$intervals = [[1, 2], [1, 5]];
echo ($solution->merge($intervals) == [[1, 5]] ? "PASSED" : "FAILED") . PHP_EOL;

$intervals = [[1, 4], [0, 4]];
echo ($solution->merge($intervals) == [[0, 4]] ? "PASSED" : "FAILED") . PHP_EOL;
