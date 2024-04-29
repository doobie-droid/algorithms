<?php

// https://leetcode.com/problems/palindrome-number/

class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    public function isPalindrome($x)
    {
        if ($x < 0) {
            return false;
        }
        $stringVersion = strval($x);
        $digitCount = strlen($stringVersion);
        for ($i = 0; $i < $digitCount; $i++) {
            if ($stringVersion[$i] !== $stringVersion[$digitCount - $i - 1]) {
                return false;
            }
        }
        return true;
    }
}

$solution = new Solution();
$s = 121;
echo ($s) . PHP_EOL;
echo ($solution->isPalindrome($s)) . PHP_EOL;
$s = -121;
echo ($s) . PHP_EOL;
echo ($solution->isPalindrome($s)) . PHP_EOL;
$s = 10;
echo ($s) . PHP_EOL;
echo ($solution->isPalindrome($s)) . PHP_EOL;
