<?php

//https://leetcode.com/problems/is-subsequence/?envType=study-plan-v2&envId=top-interview-150


class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t)
    {
    }
}

$solution = new Solution();
$s = "abc";
$t = "ahbgdc";
echo ($solution->isSubsequence($s, $t) == true ? "PASSED" : "FAILED") . PHP_EOL;

$s = "axc";
$t = "ahbgdc";
echo ($solution->isSubsequence($s, $t) == false ? "PASSED" : "FAILED") . PHP_EOL;


