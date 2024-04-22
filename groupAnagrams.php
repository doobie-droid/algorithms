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
    }
}

$solution = new Solution();
$strs = ["eat", "tea", "tan", "ate", "nat", "bat"];
echo ($solution->groupAnagrams($strs) == [["bat"], ["nat", "tan"], ["ate", "eat", "tea"]] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$strs = [""];
echo ($solution->groupAnagrams($strs) == [[""]] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$strs = ["a"];
echo ($solution->groupAnagrams($strs) == [["a"]] ? "PASSED" : "FAILED") . PHP_EOL;