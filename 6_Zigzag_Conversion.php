<?php

/**
 * The string "PAYPALISHIRING" is written in a zigzag pattern on a given number of rows like this:
 * (you may want to display this pattern in a fixed font for better legibility)
 *
 * Input: s = "PAYPALISHIRING", numRows = 3
 * Output: "PAHNAPLSIIGYIR"
 */
class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $aLines = [];
        $iCurrentLine = 0;
        $iDownDirection = false;

        for ($i = 0; $i < strlen($s); $i++) {

            // concat char
            $aLines[$iCurrentLine] .= $s[$i];

            // turn direction
            if ($iCurrentLine == 0 || $iCurrentLine == $numRows - 1) {
                $iDownDirection = !$iDownDirection;
            }

            // step line
            $iCurrentLine += $iDownDirection ? 1 : -1;
        }

        $sResult = '';
        foreach ($aLines as $sLine) {
            $sResult .= $sLine;
        }

        return $sResult;
    }
}
