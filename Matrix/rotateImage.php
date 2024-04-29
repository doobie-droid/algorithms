<?php

// https://leetcode.com/problems/rotate-image/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{
    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    public function rotate(&$matrix)
    {
        $rowCount = $columnCount = count($matrix) - 1 ;
        $visitedIndices = [];
        //First Transpose the matrix
        for ($row = 0; $row <= $rowCount; $row++) {
            for ($column = 0; $column <= $columnCount; $column++) {
                $currentLocation = "row_" . $row . "_column_" . $column;
                $swapLocation = "row_" . $column . "_column_" . $row;
                if(isset($visitedIndices[$currentLocation]) || isset($visitedIndices[$swapLocation])) {
                    continue;
                }
                $temporaryHolderForElement = $matrix[$row][$column];
                $matrix[$row][$column] = $matrix[$column][$row];
                $matrix[$column][$row] = $temporaryHolderForElement;
                $visitedIndices[$currentLocation] = true;
                $visitedIndices[$swapLocation] = true;
            }
        }
        //then reflect them along the y-axis
        for ($row = 0; $row <= $rowCount; $row++) {
            $leftPointer = 0;
            $rightPointer = $rowCount;
            while($leftPointer < $rightPointer){
                $temporaryHolderForElement = $matrix[$row][$leftPointer];
                $matrix[$row][$leftPointer] = $matrix[$row][$rightPointer];
                $matrix[$row][$rightPointer] = $temporaryHolderForElement;
                $leftPointer++;
                $rightPointer--;
            }
        }
        return $matrix;
    }


}

$solution = new Solution();
$matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
echo ($solution->rotate($matrix) ==  [[7, 4, 1], [8, 5, 2], [9, 6, 3]] ? "PASSED" : "FAILED") . PHP_EOL;

$matrix = [[5, 1, 9, 11], [2, 4, 8, 10], [13, 3, 6, 7], [15, 14, 12, 16]];
echo ($solution->rotate($matrix) ==  [[15, 13, 2, 5], [14, 3, 4, 1], [12, 6, 8, 9], [16, 7, 10, 11]] ? "PASSED" : "FAILED") . PHP_EOL;
