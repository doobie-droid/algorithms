<?php

// https://leetcode.com/problems/gas-station/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[] $gas
     * @param Integer[] $cost
     * @return Integer
     */
    function canCompleteCircuit($gas, $cost)
    {
    }
}

$solution = new Solution();
$gas = [1, 2, 3, 4, 5];
$cost = [3, 4, 5, 1, 2];
echo (json_encode($gas)) . PHP_EOL;
echo (json_encode($cost)) . PHP_EOL;
echo (json_encode($solution->canCompleteCircuit($gas, $cost))) . PHP_EOL;
$gas = [2, 3, 4];
$cost = [3, 4, 3];
echo (json_encode($gas)) . PHP_EOL;
echo (json_encode($cost)) . PHP_EOL;
echo (json_encode($solution->canCompleteCircuit($gas, $cost))) . PHP_EOL;
