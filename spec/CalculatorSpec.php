<?php

namespace spec\Calculator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
 */
class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Calculator\Calculator');
    }

    function it_implements_calculator_interface()
    {
        $this->shouldImplement('Calculator\CalculatorInterface');
    }

    function it_adds_two_numbers()
    {
        $this->add(2, 4)->shouldReturn(6);
    }

    function it_subtracts_two_numbers()
    {
        $this->subtract(8, 4)->shouldReturn(4);
    }

    function it_multiplies_two_numbers()
    {
        $this->multiply(3, 4)->shouldReturn(12);
    }

    function it_divides_two_numbers()
    {
        $this->divide(8, 4)->shouldReturn(2);
    }

    function it_throws_exception_during_dividing()
    {
        $this->shouldThrow(new \InvalidArgumentException('Division by zero'))->during('divide', array(8, 0));
    }
}
