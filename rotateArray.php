<?php

// https://leetcode.com/problems/rotate-array/description/?envType=study-plan-v2&envId=top-interview-150

//The secret here is that 
// assuming this was degrees and you had 390 degrees or 670 degrees, to get the actual degrees, you would do
// 390 mod 360        OR           670 mod 360
// so in the same vein, if the available rotation exceeds the number of available elements, bring it back to the range by doing
// Rotation degree mod Number of available elements in line 20
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    public function rotate(&$nums, $k)
    {
        $n = count($nums);
        $k = $k % $n;
        $newFirstPartofArray = array_slice($nums, $n-$k);
        $newLastPartofArray = array_slice($nums,0, $n - $k);
        $nums = array_merge($newFirstPartofArray, $newLastPartofArray);
        return ;
    }
}

$solution = new Solution();
$mainArray = [1, 2, 3, 4, 5, 6, 7];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->rotate($mainArray, 1))) . PHP_EOL;
$mainArray = [1, 2, 3, 4, 5, 6, 7];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->rotate($mainArray, 2))) . PHP_EOL;
$mainArray = [1, 2, 3, 4, 5, 6, 7];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->rotate($mainArray, 3))) . PHP_EOL;
$mainArray =   [-1,-100,3,99];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->rotate($mainArray, 2))) . PHP_EOL;
$mainArray = [0, 0, 1, 1, 2, 3, 3];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->rotate($mainArray, 1))) . PHP_EOL;
