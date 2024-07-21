<?php declare(strict_types=1);

namespace Mondu\MonduBuyerFeeCents;

use Mondu\MonduPayment\Services\OrderServices\AbstractOrderAdditionalCostsService;
use Shopware\Core\Checkout\Order\OrderEntity;
use Shopware\Core\Framework\Context;

class OrderAdditionalCostsServiceDecorated extends AbstractOrderAdditionalCostsService
{
    public function __construct(private readonly AbstractOrderAdditionalCostsService $decorated) {}

    public function getDecorated(): AbstractOrderAdditionalCostsService
    {
        return $this->decorated;
    }

    public function getAdditionalCostsCents(OrderEntity $order, Context $context): int
    {
        $originalResult = $this->getDecorated()->getAdditionalCostsCents($order, $context); // you can get the original result like so.

        return 0;
    }
}