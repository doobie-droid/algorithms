<?php


https: //leetcode.com/problems/game-of-life/description/?envType=study-plan-v2&envId=top-interview-150


class Solution
{
    /**
     * @param Integer[][] $board
     * @return NULL
     */
    public function gameOfLife(&$board)
    {
        $duplicateBoard = $board;
        $rowCount = count($board) - 1;
        $colCount = count($board[0]) - 1;

        for ($row = 0; $row <= $rowCount; $row++) {
            for ($col = 0; $col <= $colCount; $col++) {
                $right = $col + 1;
                $left = $col - 1;
                $up = $row - 1;
                $down = $row + 1;
                $upperLeft = isset($board[$up][$left]) ? $board[$up][$left] : 0;
                $upSide = isset($board[$up][$col]) ? $board[$up][$col] : 0;
                $upperRight = isset($board[$up][$right]) ? $board[$up][$right] : 0;
                $leftSide = isset($board[$row][$left]) ? $board[$row][$left] : 0;
                $rightSide = isset($board[$row][$right]) ? $board[$row][$right] : 0;
                $lowerLeft = isset($board[$down][$left]) ? $board[$down][$left] : 0;
                $downSide = isset($board[$down][$col]) ? $board[$down][$col] : 0;
                $lowerRight = isset($board[$down][$right]) ? $board[$down][$right] : 0;
                $totalLife = $upperLeft + $upSide + $upperRight + $rightSide + $leftSide + $lowerLeft + $downSide + $lowerRight;
                if($totalLife < 2 || $totalLife > 3){
                    $duplicateBoard[$row][$col] = 0;
                }else if($totalLife == 3){
                    $duplicateBoard[$row][$col] = 1;
                }else if($totalLife == 2 && $board[$row][$col]){
                    $duplicateBoard[$row][$col] = 1;
                }
            }
        }

        $board = $duplicateBoard;
        return $board;
    }
}


$solution = new Solution();
$matrix = [[0, 1, 0], [0, 0, 1], [1, 1, 1], [0, 0, 0]];
echo ($solution->gameOfLife($matrix) == [[0, 0, 0], [1, 0, 1], [0, 1, 1], [0, 1, 0]] ? "PASSED" : "FAILED") . PHP_EOL;



$matrix = [[1, 1], [1, 0]];
echo ($solution->gameOfLife($matrix) ==  [[1, 1], [1, 1]] ? "PASSED" : "FAILED") . PHP_EOL;
