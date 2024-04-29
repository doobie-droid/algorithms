<?php

// https://leetcode.com/problems/two-sum/description/
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target)
    {
        $solutionsArray = [];
        $hashMap = [];
        foreach ($nums as $index => $num) {
            $hashMap[$num] = $index;
        }
        foreach ($nums as $index => $num) {
            $remainder = $target - $num;
            if (isset($hashMap[$remainder]) && $index != $hashMap[$remainder] ) {
                $solutionsArray[] = $hashMap[$remainder];
                $solutionsArray[] = $index;
                return $solutionsArray;
            }
        }
        return $solutionsArray;
    }
}



$nums = [0, 1, 3, 2, 5];
$target = 8;

$solution = new Solution();
echo (json_encode($nums)) . PHP_EOL;
echo (json_encode($solution->twoSum($nums, $target))) . PHP_EOL;
$nums = [3, 2, 4];
$target = 6;
echo (json_encode($nums)) . PHP_EOL;
echo (json_encode($solution->twoSum($nums, $target))) . PHP_EOL;
$nums = [3, 3];
$target = 6;
echo (json_encode($nums)) . PHP_EOL;
echo (json_encode($solution->twoSum($nums, $target))) . PHP_EOL;
