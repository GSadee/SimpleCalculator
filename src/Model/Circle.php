<?php

/*
 * This file is part of the Lakion package.
 *
 * (c) Lakion
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Calculator\Model;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
*/
class Circle implements ShapeInterface
{
    /**
     * @var float
     */
    private $radius;

    /**
     * @param float $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}
