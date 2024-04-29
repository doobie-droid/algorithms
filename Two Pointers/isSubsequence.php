<?php

//https://leetcode.com/problems/is-subsequence/?envType=study-plan-v2&envId=top-interview-150


class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    public function isSubsequence($s, $t)
    {
        $i = 0;
        for ($index = 0; $index < strlen($t); $index++) {
            if ($t[$index] == $s[$i]) {
                $i++;
            }
        }
        if($i++ >= strlen($s)){
            return true;
        }
        return false;
    }
}

$solution = new Solution();
$s = "abc";
$t = "ahbgdc";
echo ($solution->isSubsequence($s, $t) == true ? "PASSED" : "FAILED") . PHP_EOL;

$s = "axc";
$t = "ahbgdc";
echo ($solution->isSubsequence($s, $t) == false ? "PASSED" : "FAILED") . PHP_EOL;

$s = "b";
$t = "c";
echo ($solution->isSubsequence($s, $t) == false ? "PASSED" : "FAILED") . PHP_EOL;
