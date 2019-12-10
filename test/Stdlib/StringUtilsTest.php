<?php
/**
 * @access Protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace AppTest\Stdlib;

use App\Stdlib\NumberUtils;
use App\Stdlib\StringUtils;
use PHPUnit\Framework\TestCase;

/**
 * Class StringUtilsTest
 * @package AppTest\Stdlib
 */
class StringUtilsTest extends TestCase
{
    /**
     * @return void
     */
    public function testCallLastWordMethod(): void
    {
        /** @var StringUtils $utils */
        $utils = StringUtils::getInstance();

        $this->assertEquals(
            strlen('industry'),
            $utils->lastWord('Lorem Ipsum is simply dummy text of the printing and typesetting industry')
        );

        $this->assertEquals(0, $utils->lastWord(''));
    }

    /**
     * @return void
     */
    public function testCallSqlDateFormat(): void
    {
        /** @var StringUtils $utils */
        $utils = StringUtils::getInstance();

        $this->assertEquals('2019-12-10', $utils->sqlDateFormat('Dec 10, 2019'));
        $this->assertEquals('2019-12-31', $utils->sqlDateFormat('31-12-2019'));
        $this->assertEquals('2019-12-30', $utils->sqlDateFormat('12/30/2019'));
    }

    /**
     * @return void
     */
    public function testCallExtractString(): void
    {
        /** @var StringUtils $utils */
        $utils = StringUtils::getInstance();

        $this->assertEquals('brown fox', $utils->extractString('The quick [brown fox].'));
        $this->assertEquals(
            'text of the printing',
            $utils->extractString('Lorem Ipsum is simply dummy [text of the printing] and typesetting')
        );
        $this->assertEquals('', $utils->extractString('Hello World'));

    }
}