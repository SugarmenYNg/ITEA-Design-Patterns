<?php
/**
 * ITEA PHP: Design patterns
 */

namespace App\DesignPatterns\Services;

class NullCache implements CacheInterface
{
    public function set($key, $value)
    {
    }

    public function get($key)
    {
    }
}
