<?php

// https://leetcode.com/problems/ransom-note/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t)
    {
        $stringLength1 = strlen($s);
        $stringLength2 = strlen($t);
        if($stringLength1 != $stringLength2){
            return false;
        }
        $availableLetters = $this->createHashMap($s);
        for ($i = 0; $i < $stringLength1; $i++) {
            if(!isset($availableLetters[$t[$i]])){
                return false;
            }
            if ($availableLetters[$t[$i]] ) {
                $availableLetters[$t[$i]] = $availableLetters[$t[$i]] - 1;
                continue;
            }
            return false;
        }
        return true;
    }

    private function createHashMap($s): array
    {
        $hashMap = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $hashMap[$s[$i]] = isset($hashMap[$s[$i]]) ? $hashMap[$s[$i]] + 1 : 1;
        }
        echo json_encode($hashMap) . PHP_EOL;
        return $hashMap;
    }
}


$solution = new Solution();
$s = "anagram";
$t = "nagaram";
echo ($solution->isAnagram($s, $t) ==  true ? "PASSED" : "FAILED") . PHP_EOL;

$s = "rat";
$t = "car";
echo ($solution->isAnagram($s, $t) ==  false ? "PASSED" : "FAILED") . PHP_EOL;

