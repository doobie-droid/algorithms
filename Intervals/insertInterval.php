<?php

// https://leetcode.com/problems/insert-interval/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[][] $intervals
     * @param Integer[] $newInterval
     * @return Integer[][]
     */
    function insert($intervals, $newInterval)
    {
        array_push($intervals, $newInterval);
        usort($intervals, function ($a, $b) {
            return $a[0] - $b[0];
        });
        array_push($intervals, [1000001, 1000001]);
        $previousEnd = $initialStart =  $intervals[0][0];   

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

        echo json_encode($solutionArray).PHP_EOL;
        return $solutionArray;
    }
}

$solution = new Solution();
$intervals = [[1, 3], [6,9]];
$newInterval = [2, 5];
echo ($solution->insert($intervals, $newInterval) == [[1, 5], [6, 9]] ? "PASSED" : "FAILED") . PHP_EOL;
