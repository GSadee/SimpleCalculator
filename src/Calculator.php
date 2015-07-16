<?php

/*
 * This file is part of the Lakion package.
 *
 * (c) Lakion
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Calculator;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
 */
class Calculator implements CalculatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function add($argument1, $argument2)
    {
        return $argument1 + $argument2;
    }

    /**
     * {@inheritdoc}
     */
    public function subtract($argument1, $argument2)
    {
        return $argument1 - $argument2;
    }

    /**
     * {@inheritdoc}
     */
    public function multiply($argument1, $argument2)
    {
        return $argument1 * $argument2;
    }

    /**
     * {@inheritdoc}
     */
    public function divide($argument1, $argument2)
    {
        if (0 === $argument2) {
            throw new \InvalidArgumentException('Division by zero');
        }

        return $argument1 / $argument2;
    }
}
