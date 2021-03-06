<?php

/*
 * This file is part of the Miky package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Miky\Component\Order\Aggregator;

use Miky\Component\Order\Model\AdjustmentInterface;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
interface AdjustmentsAggregatorInterface
{
    /**
     * @param AdjustmentInterface[] $adjustments
     *
     * @return array
     */
    public function aggregate(array $adjustments);
}
