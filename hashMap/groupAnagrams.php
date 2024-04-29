<?php

// https://leetcode.com/problems/group-anagrams/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs)
    {
        $hashMapOfFoundAnagrams = [];
        $solutionSet = [];
        $lastIndexOfAnagramGroups = 0;
        foreach ($strs as $index => $element) {
            $sortedString = $this->sortString($element);
            if (isset($hashMapOfFoundAnagrams[$sortedString])){
                $indexOfAnagram = $hashMapOfFoundAnagrams[$sortedString];
                array_push($solutionSet[$indexOfAnagram],$element);
            }else{
                $hashMapOfFoundAnagrams[$sortedString] = $lastIndexOfAnagramGroups;
                $solutionSet[$lastIndexOfAnagramGroups] = [$element];
                $lastIndexOfAnagramGroups++;
            }
        }
        // echo json_encode($solutionSet);
        return $solutionSet;
    }

    private function sortString($str)
    {
        $chars = str_split($str);
        sort($chars);
        $sortedString = implode('', $chars);

        return $sortedString;
    }
}

$solution = new Solution();

$solution = new Solution();
$strs = [""];
echo ($solution->groupAnagrams($strs) == [[""]] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$strs = ["a"];
echo ($solution->groupAnagrams($strs) == [["a"]] ? "PASSED" : "FAILED") . PHP_EOL;
