<?php

// https://leetcode.com/problems/gas-station/?envType=study-plan-v2&envId=top-interview-150

// you are looking for what does not have any negative behind it ... because if it has negative, it means that the gas ran out
class Solution
{
    /**
     * @param Integer[] $gas
     * @param Integer[] $cost
     * @return Integer
     */
    public function canCompleteCircuit($gas, $cost)
    {
        $totalGasSpent = 0;
        $gasSpentSoFar = 0;
        $starterPoint = 0;
        for ($index = 0; $index < count($gas); $index++) {
            $gasLeft  = $gas[$index] - $cost[$index];
            $totalGasSpent += $gasLeft;
            $gasSpentSoFar += $gasLeft;
            if($gasSpentSoFar < 0){
                $gasSpentSoFar = 0;
                $starterPoint = $index + 1;
            }
        }
        if ($totalGasSpent < 0) {
            return -1;
        } 
        return $starterPoint;
    }
}

$solution = new Solution();
$gas = [1, 2, 3, 4, 5];
$cost = [3, 4, 5, 1, 2];
echo (json_encode($gas)) . PHP_EOL;
echo (json_encode($cost)) . PHP_EOL;
echo (json_encode($solution->canCompleteCircuit($gas, $cost))) . PHP_EOL;
echo ($solution->canCompleteCircuit($gas, $cost) == 3 ? "PASSED" : "FAILED") . PHP_EOL;
$gas = [2, 3, 4];
$cost = [3, 4, 3];
echo (json_encode($gas)) . PHP_EOL;
echo (json_encode($cost)) . PHP_EOL;
echo (json_encode($solution->canCompleteCircuit($gas, $cost))) . PHP_EOL;
echo ($solution->canCompleteCircuit($gas, $cost) == -1 ? "PASSED" : "FAILED") . PHP_EOL;
$gas = [5, 1, 2, 3, 4];
$cost = [4, 4, 1, 5, 1];
echo (json_encode($gas)) . PHP_EOL;
echo (json_encode($cost)) . PHP_EOL;
echo (json_encode($solution->canCompleteCircuit($gas, $cost))) . PHP_EOL;
echo ($solution->canCompleteCircuit($gas, $cost) == 4 ? "PASSED" : "FAILED") . PHP_EOL;
$gas = [5, 8, 2, 8];
$cost = [6, 5, 6, 6];
echo (json_encode($gas)) . PHP_EOL;
echo (json_encode($cost)) . PHP_EOL;
echo (json_encode($solution->canCompleteCircuit($gas, $cost))) . PHP_EOL;
echo ($solution->canCompleteCircuit($gas, $cost) == 3 ? "PASSED" : "FAILED") . PHP_EOL;
$gas = [1, 2, 3, 4, 5, 5, 70];
$cost = [2, 3, 4, 3, 9, 6, 2];
echo (json_encode($gas)) . PHP_EOL;
echo (json_encode($cost)) . PHP_EOL;
echo (json_encode($solution->canCompleteCircuit($gas, $cost))) . PHP_EOL;
echo ($solution->canCompleteCircuit($gas, $cost) == 6 ? "PASSED" : "FAILED") . PHP_EOL;
$gas = [6, 1, 4, 3, 5];
$cost = [3, 8, 2, 4, 2];
echo (json_encode($gas)) . PHP_EOL;
echo (json_encode($cost)) . PHP_EOL;
echo (json_encode($solution->canCompleteCircuit($gas, $cost))) . PHP_EOL;
echo ($solution->canCompleteCircuit($gas, $cost) == 2 ? "PASSED" : "FAILED") . PHP_EOL;
