<?php

// https://leetcode.com/problems/3sum/description/?envType=study-plan-v2&envId=top-interview-150


// GOTCHA is an array like [-2, 0, 0, 2, 2];
// where if your answers are index 1 and 4, and you reduce the left and right pointer, you have the same exact array, so you need to check that the array changes before adding to the solution of triplets
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums)
    {
        sort($nums);
        $solutionTriplet = [];
        foreach ($nums as $index => $element) {
            if ($element > 0) {
                return $solutionTriplet;
            }
            if (isset($nums[$index - 1]) && $element == $nums[$index - 1]) {
                continue;
            }

            $previousInnerTriplet = [];
            $innerTriplet = [$element];
            $leftIndex = $index + 1;
            $rightIndex = count($nums) - 1;
            $remainderForSumToEqualZero = 0 - ($element);
            while ($leftIndex < $rightIndex) {
                if ($nums[$leftIndex] + $nums[$rightIndex] == $remainderForSumToEqualZero) {

                    array_push($innerTriplet, $nums[$leftIndex], $nums[$rightIndex]);
                    // echo json_encode($innerTriplet) . PHP_EOL;
                    // echo json_encode([$index, $leftIndex, $rightIndex]) . PHP_EOL;
                    $leftIndex++;
                    $rightIndex--;
                    if ($innerTriplet != $previousInnerTriplet) {
                        array_push($solutionTriplet, $innerTriplet);
                    }
                    $previousInnerTriplet = $innerTriplet;
                    $innerTriplet = [$element];
                } else if ($nums[$leftIndex] + $nums[$rightIndex] < $remainderForSumToEqualZero) {
                    $leftIndex++;
                } else {
                    $rightIndex--;
                }
            }
        }
        return $solutionTriplet;
    }
}


$solution = new Solution();
$nums = [-1, 0, 1, 2, -1, -4];
echo ($solution->threeSum($nums) == [[-1, -1, 2], [-1, 0, 1]] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$nums =
    [0, 1, 1];
echo ($solution->threeSum($nums) == [] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$nums = [0, 0, 0];
echo ($solution->threeSum($nums) == [[0, 0, 0]] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$nums = [-2, 0, 0, 2, 2];
echo ($solution->threeSum($nums) == [[-2, 0, 2]] ? "PASSED" : "FAILED") . PHP_EOL;
