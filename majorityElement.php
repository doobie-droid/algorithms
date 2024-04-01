<?php

// https://leetcode.com/problems/majority-element/description/

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function majorityElement($nums)
    {
        $n = count($nums) - 1;
        sort($nums);
        return $nums[ceil($n / 2)];
    }

    public function majorityElement2($nums)
    {
        $n = count($nums);
        $hashMapOfNumberToOccurence = array();
        foreach ($nums as $num) {
            $hashMapOfNumberToOccurence[$num] = isset($hashMapOfNumberToOccurence[$num]) ? $hashMapOfNumberToOccurence[$num] + 1 : 1;
            if ($hashMapOfNumberToOccurence[$num] > intval($n / 2)) {
                return $num;
            }
        }
    }
}


$solution = new Solution();
$nums = [3, 2, 3];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->majorityElement($nums)) . PHP_EOL;
$nums = [2, 2, 1, 1, 1, 2, 2];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->majorityElement($nums)) . PHP_EOL;
$nums = [1, 2, 1, 1, 1, 2, 2];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->majorityElement($nums)) . PHP_EOL;
