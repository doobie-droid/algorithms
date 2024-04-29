<?php

// https://leetcode.com/problems/word-pattern/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s)
    {
        $patternArray = explode(" ", $s);
        $patternRepeatCycle = count($patternArray);
        $lettersToCheck = strlen($pattern);
        if ($patternRepeatCycle != $lettersToCheck) {
            return false;
        }
        $hashMap = [];
        $usedPatterns = [];
        for($index = 0; $index < $lettersToCheck; $index++){
            if (!isset($hashMap[$pattern[$index]])) {
                if(isset($usedPatterns[$patternArray[$index % $patternRepeatCycle]])){
                    return  false;
                }
                $hashMap[$pattern[$index]] = $patternArray[$index % $patternRepeatCycle];
                $usedPatterns[$patternArray[$index % $patternRepeatCycle]] = true;
                
            } 
            else if (isset($hashMap[$pattern[$index]]) && $hashMap[$pattern[$index]] != $patternArray[$index % $patternRepeatCycle]) {
                return false;
            }
        }
        return true;
    }
}

$solution = new Solution();
$pattern = "abba";
$s = "dog cat cat dog";
echo ($solution->wordPattern($pattern, $s) ==  true ? "PASSED" : "FAILED") . PHP_EOL;

$pattern = "abba";
$s = "dog cat cat fish";
echo ($solution->wordPattern($pattern, $s) ==  false ? "PASSED" : "FAILED") . PHP_EOL;

$pattern = "aaaa";
$s = "dog cat cat dog";
echo ($solution->wordPattern($pattern, $s) ==  false ? "PASSED" : "FAILED") . PHP_EOL;

$pattern = "abba";
$s = "dog dog dog dog";
echo ($solution->wordPattern($pattern, $s) ==  false ? "PASSED" : "FAILED") . PHP_EOL;

