<?php
/**
 * @access Protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace App\Stdlib;

/**
 * Class StringUtils
 * @package App\Stdlib
 */
class StringUtils extends AbstractUtils
{
    /**
     * Returns the length of the last word of a given sentence, or 0 for empty string.
     *
     * @param string $sentence
     * @return int
     */
    public function lastWord(string $sentence): int
    {
        return strlen(
            array_pop(
                explode(' ', $sentence)
            )
        );
    }

    /**
     * Returns a date formatted in sql date format
     *
     * @param string $dateStr
     * @return string
     */
    public function sqlDateFormat(string $dateStr): string
    {
        return date('Y-m-d', strtotime($dateStr));
    }

    /**
     * Returns a part of a string that is marked with square parenthesis, if exists
     *
     * @param string $str
     * @return string
     */
    public function extractString(string $str): string
    {
        preg_match('/\[([\s\w]*)\]/', $str, $matches);

        return $matches[1] ?? "";
    }
}
