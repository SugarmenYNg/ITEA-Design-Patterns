<?php
/**
 * ITEA PHP: Design patterns
 */

namespace App\DesignPatterns\Models;

use App\DesignPatterns\Services\CacheInterface;

class User
{
    private $email;
    private $cache;

    public function __construct($email, CacheInterface $cache)
    {
        $this->email = $email;
        $this->cache = $cache;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function createSession()
    {
        // create session
        $this->cache->set($this->email, '');
    }
}
