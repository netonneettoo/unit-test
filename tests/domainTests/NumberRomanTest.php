<?php

namespace domainTests;

use domain\NumberRoman;
use \PHPUnit_Framework_TestCase;

class NumberRomanTest extends PHPUnit_Framework_TestCase
{
    public function testConvertNumberRomanI()
    {
        $this->assertEquals(1, NumberRoman::convertToDecimal('I'));
    }

    public function testConvertNumberRomanV()
    {
        $this->assertEquals(5, NumberRoman::convertToDecimal('V'));
    }

    public function testConvertNumberRomanX()
    {
        $this->assertEquals(10, NumberRoman::convertToDecimal('X'));
    }

    public function testConvertNumberRomanIV()
    {
        $this->assertEquals(4, NumberRoman::convertToDecimal('IV'));
    }

    public function testConvertNumberRomanXXII()
    {
        $this->assertEquals(22, NumberRoman::convertToDecimal('XXII'));
    }

    public function testConvertNumberRomanMMX()
    {
        $this->assertEquals(2010, NumberRoman::convertToDecimal('MMX'));
    }
}