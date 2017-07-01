<?php

/*
 * This file is a part of the Miky package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Miky\Component\Order\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Miky\Component\Order\Model\AdjustmentInterface;
use Miky\Component\Order\Model\OrderItemInterface;
use Miky\Component\Order\Model\OrderItemUnitInterface;
use Miky\Component\Order\Model\OrderSequence;
use Miky\Component\Order\Model\OrderSequenceInterface;

/**
 * @mixin OrderSequence
 *
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
 */
final class OrderSequenceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Miky\Component\Order\Model\OrderSequence');
    }

    function it_implements_order_sequence_interface()
    {
        $this->shouldImplement(OrderSequenceInterface::class);
    }

    function it_has_zero_index_after_initialized()
    {
        $this->getIndex()->shouldReturn(0);
    }

    function it_increments_index()
    {
        $this->incrementIndex();
        $this->getIndex()->shouldReturn(1);
    }
}
