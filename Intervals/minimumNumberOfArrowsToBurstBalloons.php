<?php

// https://leetcode.com/problems/minimum-number-of-arrows-to-burst-balloons/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function findMinArrowShots($points)
    {
        $arrowNum = 1;
        usort($points, function($a,$b){
            return $a[1] - $b[1];
        });
        $end = $points[0][1];
        foreach($points as $point)
        {
            if($point[0] <= $end && $end <= $point[1]){
                continue;
            }else{
                $arrowNum++;
                $end = $point[1];
            }

        }
        echo json_encode($points).PHP_EOL;
        echo $arrowNum;
        return $arrowNum;
    }
}

$solution = new Solution();
$points =
[[10, 16], [2, 8], [1, 6], [7, 12]];
echo ($solution->findMinArrowShots($points) == 2? "PASSED" : "FAILED") . PHP_EOL;

$points =
[[1, 2], [3, 4], [5, 6], [7, 8]];
echo ($solution->findMinArrowShots($points) == 4 ? "PASSED" : "FAILED") . PHP_EOL;

$points = [[1, 2], [2, 3], [3, 4], [4, 5]];
echo ($solution->findMinArrowShots($points) == 2 ? "PASSED" : "FAILED") . PHP_EOL;
