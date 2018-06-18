<?php
/**
 * ITEA PHP: Design patterns
 */

namespace App\DesignPatterns\Services;

interface CacheInterface
{
    public function set($key, $value);

    public function get($key);
}
