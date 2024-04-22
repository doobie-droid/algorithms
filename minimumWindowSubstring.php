<?php

// https://leetcode.com/problems/minimum-window-substring/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    public function minWindow($s, $t)
    {
        $defaultHashMap = $this->createHashMapOfLetters($t);
        $hashMap = $defaultHashMap;
        $lengthOfSubstring = strlen($t);
        $lengthOfString = strlen($s);
        $leftPointer = $rightPointer = 0;
        $solution = $s;
        $answer = "";
        $charCount = $totalCharCount = 0;

        if ($s == $t) {
            return $s;
        }
        if ($lengthOfSubstring > $lengthOfString) {
            return $answer;
        }
        // $s = "ADOBECODEBANC";
        // $t = "ABC";
        // $s = "a";
        // $t = "b";
        while ($rightPointer <= $lengthOfString) {
            if (isset($hashMap[$s[$rightPointer]]) && $hashMap[$s[$rightPointer]]) {
                $hashMap[$s[$rightPointer]] = $hashMap[$s[$rightPointer]] - 1;
                $charCount++;
            } else if (!isset($hashMap[$s[$rightPointer]]) && $charCount == $lengthOfSubstring) {
                $solution = $totalCharCount < strlen($solution) ? substr($s, $leftPointer, $rightPointer - $leftPointer) : $solution;
                $answer = $solution;
                $leftPointer = $rightPointer;
            } else if (isset($hashMap[$s[$rightPointer]]) && $hashMap[$s[$rightPointer]] == 0) {
                $leftPointer = $rightPointer;
                $hashMap = $defaultHashMap;
                $charCount = 1;
                $totalCharCount = 0;
            }
            $totalCharCount++;
            $rightPointer++;
            
        }
        return $answer;
    }

    public function createHashMapOfLetters($chars): array
    {
        $hashMap = [];
        for ($i = 0; $i < strlen($chars); $i++) {
            $hashMap[$chars[$i]] = isset($hashMap[$chars[$i]]) ? $hashMap[$chars[$i]] + 1 : 1;
        }
        // echo json_encode($hashMap).PHP_EOL;
        return  $hashMap;
    }
}

// $solution = new Solution();
// $s = "ADOBECODEBANC";
// $t = "ABC";
// echo ($solution->minWindow($s, $t) == "BANC" ? "PASSED" : "FAILED") . PHP_EOL;

// $solution = new Solution();
// $s = "a";
// $t = "a";
// echo ($solution->minWindow($s, $t) == "a" ? "PASSED" : "FAILED") . PHP_EOL;

// $solution = new Solution();
// $s = "a";
// $t = "aa";
// echo ($solution->minWindow($s, $t) == "" ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$s = "a";
$t = "b";
echo ($solution->minWindow($s, $t) == "" ? "PASSED" : "FAILED") . PHP_EOL;