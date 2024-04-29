<?php

// https://leetcode.com/problems/valid-sudoku/?envType=study-plan-v2&envId=top-interview-150

class Solution
{
    /**
     * @param String[][] $board
     * @return Boolean
     */
    public function isValidSudoku($board)
    {
        $availableDigits = [];
        for ($row = 0; $row < 9; $row++) {
            for ($column = 0; $column < 9; $column++) {
                if ($board[$row][$column] == ".") {
                    continue;
                }


                $existsInRow = $board[$row][$column] . "_in_row_" . $row;
                $existsInColumn = $board[$row][$column] . "_in_column_" . $column;
                $sectionRow = intval($row / 3);
                $sectionColumn = intval($column / 3);
                $existsInSection = $board[$row][$column]."_in_section_".$sectionRow."-".$sectionColumn;
                if(isset($availableDigits[$existsInRow]) || isset($availableDigits[$existsInColumn]) || isset($availableDigits[$existsInSection])) {
                    return false;
                } else {
                    $availableDigits[$existsInRow] = true;
                    $availableDigits[$existsInColumn] = true;
                    $availableDigits[$existsInSection] = true;
                }
            }
        }
        return true;
    }
}


$solution = new Solution();
$board = [
    ["5", "3", ".", ".", "7", ".", ".", ".", "."], ["6", ".", ".", "1", "9", "5", ".", ".", "."], [".", "9", "8", ".", ".", ".", ".", "6", "."], ["8", ".", ".", ".", "6", ".", ".", ".", "3"], ["4", ".", ".", "8", ".", "3", ".", ".", "1"], ["7", ".", ".", ".", "2", ".", ".", ".", "6"], [".", "6", ".", ".", ".", ".", "2", "8", "."], [".", ".", ".", "4", "1", "9", ".", ".", "5"], [".", ".", ".", ".", "8", ".", ".", "7", "9"]
];
echo ($solution->isValidSudoku($board) == true ? "PASSED" : "FAILED") . PHP_EOL;


$solution = new Solution();
$board = [
    ["8", "3", ".", ".", "7", ".", ".", ".", "."], ["6", ".", ".", "1", "9", "5", ".", ".", "."], [".", "9", "8", ".", ".", ".", ".", "6", "."], ["8", ".", ".", ".", "6", ".", ".", ".", "3"], ["4", ".", ".", "8", ".", "3", ".", ".", "1"], ["7", ".", ".", ".", "2", ".", ".", ".", "6"], [".", "6", ".", ".", ".", ".", "2", "8", "."], [".", ".", ".", "4", "1", "9", ".", ".", "5"], [".", ".", ".", ".", "8", ".", ".", "7", "9"]
];
echo ($solution->isValidSudoku($board) == false ? "PASSED" : "FAILED") . PHP_EOL;
