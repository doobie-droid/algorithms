<?php


// https://leetcode.com/problems/set-matrix-zeroes/description/?envType=study-plan-v2&envId=top-interview-150


class Solution
{
    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    public function setZeroes(&$matrix)
    {
        $rowCount = count($matrix) - 1;
        $colCount = count($matrix[0]) - 1;
        $zeroLocatedAt = [];
        for($row = 0; $row <= $rowCount; $row++) {
            for($col = 0; $col <= $colCount; $col++) {
                if($matrix[$row][$col] == 0) {
                    $rowIndex = "row_".$row;
                    $colIndex = "col_".$col;
                    $zeroLocatedAt[$rowIndex] = true;
                    $zeroLocatedAt[$colIndex] = true;
                }
            }
        }

        for($row = 0; $row <= $rowCount; $row++) {
            for($col = 0; $col <= $colCount; $col++) {

                $rowIndex = "row_".$row;
                $colIndex = "col_".$col;
                if(isset($zeroLocatedAt[$rowIndex]) || isset($zeroLocatedAt[$colIndex])) {
                    $matrix[$row][$col] = 0;
                }


            }
        }
        return $matrix;
    }
}


$solution = new Solution();
$matrix = [[1,1,1],[1,0,1],[1,1,1]];
echo ($solution->setZeroes($matrix) ==  [[1,0,1],[0,0,0],[1,0,1]] ? "PASSED" : "FAILED") . PHP_EOL;



$matrix = [[0,1,2,0],[3,4,5,2],[1,3,1,5]];
echo ($solution->setZeroes($matrix) ==  [[0,0,0,0],[0,4,5,0],[0,3,1,0]] ? "PASSED" : "FAILED") . PHP_EOL;
