<?php
/**
 * @access Protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace App\Stdlib;

/**
 * Class AbstractUtils
 * @package App\Stdlib
 */
abstract class AbstractUtils
{
    /**
     * @var AbstractUtils[]|array
     */
    private static $instances = [];

    /**
     * Utils constructor.
     */
    private function __construct()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    private function __clone()
    {
    }

    /**
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * @return AbstractUtils
     */
    public static function getInstance(): self
    {
        /** @var string $name */
        $name = static::class;
        if (!isset(self::$instances[$name])) {
            self::$instances[$name] = new static;
        }

        return self::$instances[$name];
    }
}
