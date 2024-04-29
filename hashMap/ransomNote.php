<?php

// https://leetcode.com/problems/ransom-note/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine)
    {
        $useableLetters = $this->createHashMap($magazine);
        for ($i = 0; $i < strlen($ransomNote); $i++) {
            if(isset($useableLetters[$ransomNote[$i]]) && $useableLetters[$ransomNote[$i]] ){
                $useableLetters[$ransomNote[$i]] = $useableLetters[$ransomNote[$i]] - 1;
                continue;
            }
            return false;
        }
        return true;

    }

    private function createHashMap($magazine): array
    {
        $hashMap = [];
        for($i = 0;  $i < strlen($magazine); $i++){
            $hashMap[$magazine[$i]] = isset($hashMap[$magazine[$i]]) ? $hashMap[$magazine[$i]] + 1 : 1;
        }
        echo json_encode($hashMap).PHP_EOL;
        return $hashMap;
    }
}

$solution = new Solution();
$ransomNote = "a";
$magazine = "b";
echo ($solution->canConstruct($ransomNote, $magazine) ==  false ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$ransomNote = "aa";
$magazine = "ab";
echo ($solution->canConstruct($ransomNote, $magazine) ==  false ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$ransomNote = "aa";
$magazine = "aab";
echo ($solution->canConstruct($ransomNote, $magazine) ==  true ? "PASSED" : "FAILED") . PHP_EOL;
