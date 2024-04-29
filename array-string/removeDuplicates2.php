<?php
// https://leetcode.com/problems/remove-duplicates-from-sorted-array-ii/description/?envType=study-plan-v2&envId=top-interview-150

// NOTE: you can use the 2 pointer method to solve this problem.. 
//INITIALISE i and j at 1 since 0 would always be in the final array
// https://leetcode.com/problems/remove-duplicates-from-sorted-array-ii/solutions/4804983/beats-100-0ms-advanced-two-pointer-approach-java-c-python-rust/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $k = 0;
        $hashTable = array();
        for ($i = 0; $i < count($nums); $i++) {
            if (isset($hashTable[$nums[$i]]) && $hashTable[$nums[$i]] >= 2) {
                $nums[$i] = "_";
            } else {
                $hashTable[$nums[$i]] = isset($hashTable[$nums[$i]]) ? $hashTable[$nums[$i]] + 1 : 1;
                $k++;
            }
        }
        sort($nums);
        return $k;
    }
}
$solution = new Solution();
$mainArray = [1, 1, 1, 2, 2, 3];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->removeDuplicates($mainArray))) . PHP_EOL;
$mainArray = [0, 0, 1, 1, 1, 1, 2, 3, 3];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->removeDuplicates($mainArray))) . PHP_EOL;
$mainArray = [0, 0, 1, 1, 2, 3, 3];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->removeDuplicates($mainArray))) . PHP_EOL;
