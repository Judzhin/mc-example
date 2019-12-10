<?php
/**
 * @access Protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace AppTest\Stdlib;

use App\Stdlib\NumberUtils;
use PHPUnit\Framework\TestCase;

/**
 * Class NumberUtilsTest
 * @package AppTest\Stdlib
 */
class NumberUtilsTest extends TestCase
{
    /**
     * @return void
     */
    public function testCallIsPowerMethod(): void
    {
        /** @var NumberUtils $utils */
        $utils = NumberUtils::getInstance();

        $this->assertTrue($utils->isPower(16, 4));
        $this->assertFalse($utils->isPower(12, 2));

        $this->assertTrue($utils->isPower(25, 5));
        $this->assertFalse($utils->isPower(20, 3));
    }

    /**
     * @return void
     */
    public function testCallFormatNumberMethod(): void
    {
        /** @var NumberUtils $utils */
        $utils = NumberUtils::getInstance();
        $this->assertEquals('4,000.15', $utils->formatNumber('$4,000.15A'));
    }

    /**
     * @return void
     */
    public function testCallSumDigits(): void
    {
        /** @var int $expected */
        foreach ([10, 20, 30] as $expected) {
            $this->assertEquals($expected, NumberUtils::getInstance()->sumDigits(10));
        }
    }
}