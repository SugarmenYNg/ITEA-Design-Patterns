<?php
/**
 * ITEA PHP: Design patterns
 */

namespace App\DesignPatterns\Security;

final class AuthProtocolStaticFactory
{
    public static function factory($version)
    {
        switch ($version) {
            case AuthProtocolV1::TYPE:
                return new AuthProtocolV1();
            case AuthProtocolV2::TYPE:
                return new AuthProtocolV2();
        }

        throw new \LogicException('Unknown auth protocol');
    }

    // Abstract factory
    public function createAuthProtocolV1()
    {
        return new AuthProtocolV1();
    }

    public function createAuthProtocolV2()
    {
        return new AuthProtocolV2();
    }
}
