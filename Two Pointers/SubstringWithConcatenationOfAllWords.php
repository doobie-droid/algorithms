<?php

// https://leetcode.com/problems/substring-with-concatenation-of-all-words/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String $s
     * @param String[] $words
     * @return Integer[]
     */
    function findSubstring($s, $words)
    {
        $hashMapOfSmallerWords = $this->createHashMapOfWords($words);
        $workingHashMap = $hashMapOfSmallerWords;
        $currSubstringLength = 0;
        $stringCharCount = strlen($words[0]);
        $wordCount = count($words);
        $stringCharCountOfGivenWord = strlen($s);
        $lengthOfMaxSubstr = $wordCount * $stringCharCount;
        $solutionArray = [];
        for ($j = 0; $j < $stringCharCount; $j++) {
            for ($startingIndex = $j; $startingIndex <= $stringCharCountOfGivenWord; $startingIndex = $startingIndex + $stringCharCount) {
                $innerWord = substr($s, $startingIndex, $stringCharCount);
                if (isset($workingHashMap[$innerWord]) && $workingHashMap[$innerWord]) {
                    $workingHashMap[$innerWord] = $workingHashMap[$innerWord] - 1;
                    $currSubstringLength += $stringCharCount;
                    continue;
                } else if ($currSubstringLength == $lengthOfMaxSubstr) {
                    array_push($solutionArray, $startingIndex - $currSubstringLength);
                    $currSubstringLength = 0;
                    $startingIndex = $startingIndex - $lengthOfMaxSubstr;
                    $workingHashMap = $hashMapOfSmallerWords;
                }else {
                    $startingIndex = $startingIndex - $currSubstringLength;
                    $currSubstringLength = 0;
                    $workingHashMap = $hashMapOfSmallerWords;
                }
            }
        }
        // echo json_encode($solutionArray).PHP_EOL;
        return $solutionArray;
    }

    public function createHashMapOfWords($words): array
    {
        $hashMap = [];
        foreach ($words as $word) {
            $hashMap[$word] = isset($hashMap[$word]) ? $hashMap[$word] + 1 : 1;
        }
        // echo json_encode($hashMap).PHP_EOL;
        return  $hashMap;
    }
}

$solution = new Solution();
$s = "barfoothefoobarman";
$words = ["foo", "bar"];
echo ($solution->findSubstring($s, $words) == [0, 9] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$s = "wordgoodgoodgoodbestword";
$words = ["word", "good", "best", "word"];
echo ($solution->findSubstring($s, $words) == [] ? "PASSED" : "FAILED") . PHP_EOL;


$solution = new Solution();
$s =  "barfoofoobarthefoobarman";
$words = ["bar", "foo", "the"];
echo ($solution->findSubstring($s, $words) == [6, 9, 12] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$s =  "wordgoodgoodgoodbestword";
$words = ["word", "good", "best", "good"];
echo ($solution->findSubstring($s, $words) == [8] ? "PASSED" : "FAILED") . PHP_EOL;

