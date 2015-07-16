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
class Rectangle implements ShapeInterface
{
    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * @param float $width
     * @param float $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        return $this->width * $this->height;
    }
}
