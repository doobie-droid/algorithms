<?php

// https://leetcode.com/problems/reverse-words-in-a-string/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
    }
}

$solution = new Solution();
$num = "the sky is blue";
echo ($num) . PHP_EOL;
echo ($solution->reverseWords($num)) . PHP_EOL;
$num = "  hello world  ";
echo ($num) . PHP_EOL;
echo ($solution->reverseWords($num)) . PHP_EOL;
$num = "a good   example";
echo ($num) . PHP_EOL;
echo ($solution->reverseWords($num)) . PHP_EOL;
