<?php

/**
 * ITEA PHP: Design patterns
 */

use App\DesignPatterns\Database\SqlQueryBuilder;
use App\DesignPatterns\Security\AuthProtocolStaticFactory;

require_once __DIR__ . '/../vendor/autoload.php';

//$v1 = AuthProtocolStaticFactory::factory('AUTH-V1');
//$v1->authenticate();
//
//$v2 = AuthProtocolStaticFactory::factory('AUTH-V2');
//$v2->authenticate();

$queryBuilder = new SqlQueryBuilder();
$query = $queryBuilder->select('id, first_name, created_at')
    ->from('user')
    ->where('nickname = vasya')
    ->getQuery();

\var_dump($query);
