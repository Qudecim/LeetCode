<?php

/**
 * Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.
 *
 * Input: s = "MCMXCIV"
 * Output: 1994
 * Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) :int
    {
        $aRoman = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $iSum = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $iNumber = $aRoman[$s[$i]];

            if (!empty($aRoman[$s[$i + 1]])) {

                $iNextNumber = $aRoman[$s[$i + 1]];
                if ($iNumber < $iNextNumber) {
                    $iNumber = $iNextNumber - $iNumber;
                    $i++;
                }

            }

            $iSum += $iNumber;
        }

        return $iSum;
    }
}
