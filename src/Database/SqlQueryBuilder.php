<?php
/**
 * ITEA PHP: Design patterns
 */

namespace App\DesignPatterns\Database;

class SqlQueryBuilder
{
    private $fields = '*';
    private $tableName;
    private $condition;

    public function select($fields)
    {
        $this->fields = $fields;
    }

    public function from($tableName)
    {
        $this->tableName = $tableName;
    }

    public function where($condition)
    {
        $this->condition = $condition;
    }

    public function getQuery()
    {
        return \sprintf(
            'SELECT %s FROM %s WHERE %s',
            $this->fields,
            $this->tableName,
            $this->condition
        );
    }
}
