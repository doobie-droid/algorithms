<?php

// https://leetcode.com/studyplan/top-interview-150/

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function calculate($s)
    {
    }
}

$solution = new Solution();
$s = "1 + 1";
echo ($solution->calculate($s) == 2 ? "PASSED" : "FAILED") . PHP_EOL;

$s = " 2-1 + 2 ";
echo ($solution->calculate($s) == 3 ? "PASSED" : "FAILED") . PHP_EOL;

$s = "(1+(4+5+2)-3)+(6+8)";
echo ($solution->calculate($s) == 23 ? "PASSED" : "FAILED") . PHP_EOL;
