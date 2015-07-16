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
class Square implements ShapeInterface
{
    /**
     * @var float
     */
    private $width;

    /**
     * @param float $width
     */
    public function __construct($width)
    {
        $this->width = $width;
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        return $this->width * $this->width;
    }
}
