<?php

/*
 * This file is part of the Lakion package.
 *
 * (c) Lakion
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Calculator\Calculator;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
 */
interface CalculatorInterface
{
    /**
     * @param float $argument1
     * @param float $argument2
     *
     * @return float
     */
    public function add($argument1, $argument2);

    /**
     * @param float $argument1
     * @param float $argument2
     *
     * @return float
     */
    public function subtract($argument1, $argument2);

    /**
     * @param float $argument1
     * @param float $argument2
     *
     * @return float
     */
    public function multiply($argument1, $argument2);

    /**
     * @param float $argument1
     * @param float $argument2
     *
     * @return float
     */
    public function divide($argument1, $argument2);
}