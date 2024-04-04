<?php

// https://leetcode.com/problems/zigzag-conversion/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows)
    {
    }
}

$solution = new Solution();
$s = "PAYPALISHIRING";
$numRows = 3;
echo ($solution->convert($s,$numRows)) . PHP_EOL;
$s = "PAYPALISHIRING";
$numRows = 4;
echo ($solution->convert($s, $numRows)) . PHP_EOL;
$s = "A";
$numRows = 1;
echo ($solution->convert($s, $numRows)) . PHP_EOL;