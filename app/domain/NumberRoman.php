<?php

namespace domain;

class NumberRoman
{
    public static $numbers = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

//    public static function convertToDecimal($numberRoman)
//    {
//        return 1;
//    }

//    public static function convertToDecimal($numberRoman)
//    {
//        if ($numberRoman == "I") return 1;
//        if ($numberRoman == "V") return 5;
//
//        return 0;
//    }

//    public static function convertToDecimal($numberRoman)
//    {
//        return self::$numbers[$numberRoman];
//    }

    public static function convertToDecimal($numberRoman)
    {
        $decimal = 0;
        $totalCharacters = strlen($numberRoman);
        for($i = 0; $i < $totalCharacters; $i++) {
            $current = self::$numbers[$numberRoman[$i]];
            if (($i + 1) == $totalCharacters) {
                $decimal += $current;
            } else {
                $next = self::$numbers[$numberRoman[$i + 1]];
                if ($current < $next) {
                    $decimal -= $current;
                } else {
                    $decimal += $current;
                }
            }
        }
        return $decimal;
    }
}