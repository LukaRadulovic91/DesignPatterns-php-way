<?php

namespace paterni\Creational\Builder\RealExample;

/**
 * The Builder interface declares a set of methods to assemble an SQL query.
 *
 * All of the construction steps are returning the current builder object to
 * allow chaining: $builder->select(...)->where(...)
 */
interface SQLQueryBuilder
{
    public function select(string $table, array $fields): SQLQueryBduilder;

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder;

    public function limit(int $start, int $offset): SQLQueryBuilder;

    // +100 other SQL syntax methods...

    public function getSQL(): string;
}
