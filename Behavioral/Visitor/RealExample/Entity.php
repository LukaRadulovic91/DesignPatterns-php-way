<?php

namespace paterni\Behavioral\Visitor\RealExample;

/**
 * The Component interface declares a method of accepting visitor objects.
 *
 * In this method, a Concrete Component must call a specific Visitor's method
 * that has the same parameter type as that component.
 */
interface Entity
{
    public function accept(Visitor $visitor): string;
}
