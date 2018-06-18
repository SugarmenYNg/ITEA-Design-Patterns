<?php
/**
 * ITEA PHP: Design patterns
 */

namespace App\DesignPatterns\Models;

class UserFactory
{
    private $pool = [];

    public function createUser($email)
    {
        if (!isset($this->pool[$email])) {
            $this->pool[$email] = new User($email);
        }

        return $this->pool[$email];
    }
}
