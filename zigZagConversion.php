<?php

// https://leetcode.com/problems/zigzag-conversion/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows)
    {
        $positionArray = $this->createPositioningArray($numRows);
        $repetitionCycle = count($positionArray);
        $solutionArray = [];
        $totalCounter = 0;
        $solutionString = "";
        for ($index = 0; $index < $numRows; $index++) {
            $solutionArray[] = [];
        }
        while ($totalCounter < strlen($s)) {
            $rowToInsert = $positionArray[$totalCounter % $repetitionCycle];
            array_push($solutionArray[$rowToInsert], $s[$totalCounter]);
            $totalCounter++;
        }
        foreach($solutionArray as $minorArray){
            $solutionString .= implode("", $minorArray);
        }
        return $solutionString;
    }

    function createPositioningArray($numberOfRows)
    {
        // 1 row would have a row placement of this before it starts repeating itself[0]
        // 2 rows would have a row placement of this before it starts repeating itself[0,1]
        // 3 rows would have a row placement of this before it starts repeating itself[0,1,2,1]
        // 4 rows would have a row placement of this before it starts repeating itself[0,1,2,3,2,1]

        $lastIndex = $numberOfRows - 1;
        $array = array();
        for ($i = 0; $i <= $lastIndex; $i++) {
            $array[] = $i;
        }
        for ($i = $lastIndex - 1; $i > 0; $i--) {
            $array[] = $i;
        }
        return $array;
    }
}

$solution = new Solution();
$s = "PAYPALISHIRING";
$numRows = 3;
echo ($solution->convert($s, $numRows) == "PAHNAPLSIIGYIR" ? "PASSED" : "FAILED") . PHP_EOL;
$s = "PAYPALISHIRING";
$numRows = 4;
echo ($solution->convert($s, $numRows) == "PINALSIGYAHRPI" ? "PASSED" : "FAILED") . PHP_EOL;
$s = "A";
$numRows = 1;
echo ($solution->convert($s, $numRows) == "A" ? "PASSED" : "FAILED") . PHP_EOL;
