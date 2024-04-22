<?php

// https://leetcode.com/problems/spiral-matrix/?envType=study-plan-v2&envId=top-interview-150

class Solution
{
    public $matrix;
    public $currentColumn;
    public $currentRow;
    public $takenDigitsHashMap;
    public $solutionArray;
    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    public function spiralOrder(array $matrix): array
    {
        $this->takenDigitsHashMap = [];
        $this->currentColumn = 0;
        $this->currentRow = 0;
        $this->matrix = $matrix;
        $this->solutionArray = [];
        $steps = 0;
        $rowCount = count($matrix);
        $columnCount = count($matrix[0]);
        //The maximum steps allowed is because I noticed that whichever is shorter, the row or the column controls how many times the matrix would loop round
        $maximumStepsAllowed = intval(min($rowCount, $columnCount) / 2);
        while ($steps <= $maximumStepsAllowed) {
            $this->currentColumn = $this->currentRow = $steps;
            for ($column = $steps; $column < $columnCount - $steps; $column++) {
                $this->currentColumn = $column;
                $this->insertDigitInSolutionArray();
            }
            for ($row = $steps; $row < $rowCount - $steps; $row++) {
                $this->currentRow = $row;
                $this->insertDigitInSolutionArray();
            }
            for ($column = $columnCount - 1 - $steps; $column >= $steps; $column--) {
                $this->currentColumn = $column;
                $this->insertDigitInSolutionArray();
            }
            for ($row = $rowCount - 1 - $steps; $row >= $steps; $row--) {
                $this->currentRow = $row;
                $this->insertDigitInSolutionArray();
            }
            $steps++;
        }

        return $this->solutionArray;
    }

    private function insertDigitInSolutionArray(): void
    {
        $elementAlreadyTaken = $this->matrix[$this->currentRow][$this->currentColumn] . "_row_" . $this->currentRow . "_column_" . $this->currentColumn;
        if (!isset($this->takenDigitsHashMap[$elementAlreadyTaken])) {
            $this->takenDigitsHashMap[$elementAlreadyTaken] = true;
            array_push($this->solutionArray, $this->matrix[$this->currentRow][$this->currentColumn]);
        }
    }
}

$solution = new Solution();
$matrix = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]];
echo ($solution->spiralOrder($matrix) == [1, 2, 3, 4, 8, 12, 11, 10, 9, 5, 6, 7] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
echo ($solution->spiralOrder($matrix) == [1, 2, 3, 6, 9, 8, 7, 4, 5] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$matrix = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12], [13, 14, 15, 16]];
echo ($solution->spiralOrder($matrix) == [1, 2, 3, 4, 8, 12, 16, 15, 14, 13, 9, 5, 6, 7, 11, 10] ? "PASSED" : "FAILED") . PHP_EOL;

$solution = new Solution();
$matrix = [[1, 2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13, 14, 15], [16, 17, 18, 19, 20], [21, 22, 23, 24, 25]];
echo ($solution->spiralOrder($matrix) == [1, 2, 3, 4, 5, 10, 15, 20, 25, 24, 23, 22, 21, 16, 11, 6, 7, 8, 9, 14, 19, 18, 17, 12, 13] ? "PASSED" : "FAILED") . PHP_EOL;
