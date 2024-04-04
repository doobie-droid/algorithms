<?php

// https://leetcode.com/problems/h-index/description/?envType=study-plan-v2&envId=top-interview-150


class Solution
{
    /**
     * @param Integer[] $citations
     * @return Integer
     */
    public function hIndex($citations)
    {
        $hIndex = 0;
        rsort($citations);
        for($i = 0; $i < count($citations); $i++){
            if($citations[$i] > $hIndex){
                $hIndex++;
            }
        }
        return $hIndex;
    }
}


$solution = new Solution();
$nums = [3, 0, 6, 1, 5];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->hIndex($nums)) . PHP_EOL;
$nums = [1, 3, 1];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->hIndex($nums)) . PHP_EOL;
$nums = [60,3];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->hIndex($nums)) . PHP_EOL;
$nums = [6,3,5,5,5];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->hIndex($nums)) . PHP_EOL;
