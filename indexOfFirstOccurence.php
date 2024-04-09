<?php

//https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/?envType=study-plan-v2&envId=top-interview-150
class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
    }
}

$solution = new Solution();
$haystack = "sadbutsad";
$needle = "sad";
echo ($solution->strStr($haystack, $needle) == 0 ? "PASSED" : "FAILED") . PHP_EOL;
$haystack = "leetcode";
$needle = "leeto";
echo ($solution->strStr($haystack, $needle) == -1 ? "PASSED" : "FAILED") . PHP_EOL;
