<?php


// https://leetcode.com/problems/evaluate-reverse-polish-notation/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String[] $tokens
     * @return Integer
     */
    function evalRPN($tokens)
    {
    }
}


$solution = new Solution();
$tokens = ["2", "1", "+", "3", "*"];
echo ($solution->evalRPN($tokens) == 9 ? "PASSED" : "FAILED") . PHP_EOL;

$tokens = ["4", "13", "5", "/", "+"];
echo ($solution->evalRPN($tokens) == 6 ? "PASSED" : "FAILED") . PHP_EOL;

$tokens = ["10", "6", "9", "3", "+", "-11", "*", "/", "*", "17", "+", "5", "+"];
echo ($solution->evalRPN($tokens) == 22 ? "PASSED" : "FAILED") . PHP_EOL;