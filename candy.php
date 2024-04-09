<?php

// https://leetcode.com/problems/candy/?envType=study-plan-v2&envId=top-interview-150

class Solution
{
    /**
     * @param Integer[] $ratings
     * @return Integer
     */
    public function candy($ratings)
    {
        $countOfRatings = count($ratings);
        $lastIndexOfChildren =  $countOfRatings - 1;
        $solutionArray = $rightToLeftArray = $leftToRightArray = array_fill(0, $countOfRatings, 1);
        for ($i = 0, $j = $lastIndexOfChildren; $i <= $lastIndexOfChildren; $i++, $j--) {
            if (isset($ratings[$i - 1])) {
                $leftToRightArray[$i] = $ratings[$i] > $ratings[$i - 1] ? $leftToRightArray[$i - 1] + 1 : 1;
            }
            if (isset($ratings[$j + 1])) {
                $rightToLeftArray[$j] =
                    $ratings[$j] > $ratings[$j + 1] ? $rightToLeftArray[$j + 1] + 1 : 1;
            }
        }
        foreach($solutionArray as $index => $value){
            $solutionArray[$index] = max($leftToRightArray[$index], $rightToLeftArray[$index]);
        }
        return array_sum($solutionArray);
    }
}


$solution = new Solution();
$mainArray = [1, 0, 2];
echo ($solution->candy($mainArray) == 5 ? "PASSED" : "FAILED") . PHP_EOL;
$mainArray = [1, 2, 2];
echo ($solution->candy($mainArray) == 4 ? "PASSED" : "FAILED") . PHP_EOL;
$mainArray = [1, 4, 1, 0, 2, 3, 1];
echo ($solution->candy($mainArray) == 13 ? "PASSED" : "FAILED") . PHP_EOL;
$mainArray = [1];
echo ($solution->candy($mainArray) == 1 ? "PASSED" : "FAILED") . PHP_EOL;
$mainArray = [1, 0];
echo ($solution->candy($mainArray) == 3 ? "PASSED" : "FAILED") . PHP_EOL;
$mainArray = [0, 1];
echo ($solution->candy($mainArray) == 3 ? "PASSED" : "FAILED") . PHP_EOL;
$mainArray = [1, 0, 1];
echo ($solution->candy($mainArray) == 5 ? "PASSED" : "FAILED") . PHP_EOL;
$mainArray = [1, 2, 87, 87, 87, 2, 1];
echo ($solution->candy($mainArray) == 13 ? "PASSED" : "FAILED") . PHP_EOL;
