<?php
/**
 * ITEA PHP: Design patterns
 */

namespace App\DesignPatterns\Services;

class InMemoryCache implements CacheInterface
{
    private $data = [];

    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function get($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }
}
