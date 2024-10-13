<?php

namespace Src\Leetcode\Algorithms;

class PhoneLetterCombinations
{

    /**
     * @param String $digits
     * @return String[]
     */
    public function letterCombinations(string $digits): array
    {
        if (empty($digits)) {
            return [];
        }
        $mapper = [
            2 => 'abc',
            3 => 'def',
            4 => 'ghi',
            5 => 'jkl',
            6 => 'mno',
            7 => 'pqrs',
            8 => 'tuv',
            9 => 'wxyz',
        ];
        $answer = [''];
        $digitsLen = strlen($digits);

        for ($i = 0; $i < $digitsLen; $i++) {
            $digit = $digits[$i];

            if (!isset($mapper[$digit])) {
                continue;
            }

            $chars = mb_str_split($mapper[$digit]);

            $result = [];

            foreach ($answer as $combinations) {
                foreach ($chars as $char) {
                    $result[] = $combinations . $char;
                }
            }

            $answer = $result;
        }

        return $answer;
    }
}