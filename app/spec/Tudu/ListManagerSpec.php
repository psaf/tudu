<?php

namespace spec\Tudu;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ListManagerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Tudu\ListManager');
    }

    function it_can_create_a_list()
    {
        $this->create()->shouldReturnAnInstanceOf('\Tudu\Lists\TodoList');
    }
}
