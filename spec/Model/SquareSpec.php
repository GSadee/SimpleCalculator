<?php

namespace spec\Calculator\Model;

use PhpSpec\ObjectBehavior;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
*/
class SquareSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(4);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Calculator\Model\Square');
    }

    function it_implements_shape()
    {
        $this->shouldImplement('Calculator\Model\ShapeInterface');
    }

    function it_calculates_area()
    {
        $this->getArea()->shouldReturn(16);
    }
}