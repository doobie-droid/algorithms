<?php

// https://leetcode.com/problems/isomorphic-strings/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t)
    {
        return $this->checkIsomorphic($s, $t) && $this->checkIsomorphic($t, $s);
    }

    private function checkIsomorphic($string1,$string2): bool
    {
        $stringLength = strlen($string1);
        $hashMap = [];
        for ($index = 0; $index < $stringLength; $index++) {
            if (!isset($hashMap[$string1[$index]])) {
                $hashMap[$string1[$index]] = $string2[$index];
            } else if (isset($hashMap[$string1[$index]]) && $hashMap[$string1[$index]] != $string2[$index]) {
                return false;
            }
        }
        return true;
    }
}


$solution = new Solution();
$s = "egg";
$t = "add";
echo ($solution->isIsomorphic($s,$t) ==  true ? "PASSED" : "FAILED") . PHP_EOL;

$s = "foo";
$t = "bar";
echo ($solution->isIsomorphic($s, $t) ==  false ? "PASSED" : "FAILED") . PHP_EOL;

$s = "paper";
$t = "title";
echo ($solution->isIsomorphic($s, $t) ==  true ? "PASSED" : "FAILED") . PHP_EOL;

$s = "badc";
$t = "baba";
echo ($solution->isIsomorphic($s, $t) ==  false ? "PASSED" : "FAILED") . PHP_EOL;