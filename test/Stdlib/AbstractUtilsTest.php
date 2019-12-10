<?php
/**
 * @access Protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace AppTest\Stdlib;

use App\Stdlib\AbstractUtils;
use PHPUnit\Framework\TestCase;

/**
 * Class NumberUtilsTest
 * @package AppTest\Stdlib
 */
class AbstractUtilsTest extends TestCase
{

    /**
     * @expectedException \Exception
     */
    public function testCallWakeUpMethod(): void
    {
        /** @var AbstractUtils $utils */
        $utils = new class extends AbstractUtils {
            public function __construct()
            {
            }
        };

        serialize($utils);
    }
}