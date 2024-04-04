<?php

// https://leetcode.com/problems/jump-game-ii/?envType=study-plan-v2&envId=top-interview-150

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function jump($nums)
    {
        $steps = 0;
        $leftBoundary = $rightBoundary = 0;
        $finalDestination = count($nums) - 1;
        while ($rightBoundary < $finalDestination) {
            $newLeftBoundary = $newRightBoundary = $rightBoundary + 1;
            for ($i = $leftBoundary; $i <= $rightBoundary; $i++) {
                $newRightBoundary = max([$newRightBoundary, $nums[$i] + $i]);
            }
            $leftBoundary = $newLeftBoundary;
            $rightBoundary = $newRightBoundary;
            $steps++;
        }
        return $steps;
    }
}

$solution = new Solution();
$nums = [2, 3, 1, 1, 4];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->jump($nums)) . PHP_EOL;
$nums = [2, 3, 0, 1, 4];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->jump($nums)) . PHP_EOL;
$nums = [1, 0];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->jump($nums)) . PHP_EOL;
$nums = [0];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->jump($nums)) . PHP_EOL;
