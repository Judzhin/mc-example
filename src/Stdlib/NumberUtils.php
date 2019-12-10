<?php
/**
 * @access Protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace App\Stdlib;

use Zend\Filter\FilterInterface;
use Zend\I18n\Filter\NumberFormat;
use Zend\Math\BigInteger\BigInteger;

/**
 * Class NumberUtils
 * @package App\Stdlib
 */
class NumberUtils extends AbstractUtils
{
    /**
     * Returns true if there is a number n so that: $base^n = $number
     *
     * @param int $number
     * @param int $base
     * @return bool
     */
    public function isPower(int $number, int $base): bool
    {
        return BigInteger::factory('bcmath')
                ->sqrt($number) == $base;
    }

    /**
     * Returns a string after removing nonnumeric characters except comma and dot
     *
     * @param string $str
     * @return string
     */
    public function formatNumber(string $str): string
    {
        /** @var FilterInterface|NumberFormat $filter */
        $filter = new NumberFormat('en_US', \NumberFormatter::CURRENCY);

        /** @var mixed $result */
        $result = $filter->filter($str);

        return $filter
            ->setStyle(\NumberFormatter::DEFAULT_STYLE)
            ->filter($result);
    }

    /**
     * Returns the sum of the digits of the given number
     *
     * @param int $number
     * @return int
     */
    public function sumDigits(int $number): int
    {
        /** @var int $sum */
        static $sum = 0;

        return $sum += $number;
    }
}
