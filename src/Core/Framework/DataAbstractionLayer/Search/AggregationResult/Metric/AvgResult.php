<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer\Search\AggregationResult\Metric;

use Shopware\Core\Framework\DataAbstractionLayer\Search\AggregationResult\AggregationResult;

/**
 * @final
 *
 * @package core
 */
class AvgResult extends AggregationResult
{
    public function __construct(string $name, protected float $avg)
    {
        parent::__construct($name);
    }

    public function getAvg(): float
    {
        return $this->avg;
    }
}
