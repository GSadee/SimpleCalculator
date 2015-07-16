<?php

namespace spec\Calculator\Model;

use PhpSpec\ObjectBehavior;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
*/
class RectangleSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(4, 8);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Calculator\Model\Rectangle');
    }

    function it_implements_shape()
    {
        $this->shouldImplement('Calculator\Model\ShapeInterface');
    }

    function it_calculates_area()
    {
        $this->getArea()->shouldReturn(32);
    }
}