<?php

namespace MonduExtendBuyerFees\Services;

use Mond1SWR5\Services\OrderServices\AbstractOrderAdditionalCostsService;

class OrderAdditionalCostsDecorator extends AbstractOrderAdditionalCostsService {
    /**
     * @var AbstractOrderAdditionalCostsService
     */
    protected $orderAdditionalCostsService;

    public function __construct(AbstractOrderAdditionalCostsService $orderAdditionalCostsService) {
        $this->orderAdditionalCostsService = $orderAdditionalCostsService;
    }

    /**
     * Get the additional costs associated with the order (during the checkout)
     *
     * @param $sOrderVariables
     * @return int
     */
    public function getAdditionalCostsCentsFromOrderVariables($sOrderVariables): int
    {
        // $original = $this->orderAdditionalCostsService->getAdditionalCostsCentsFromOrderVariables($sOrderVariables);
        return 0;
    }


    /**
     * Check if $order instanceof Order and get the additional costs associated with the order (in admin panels)
     */
    public function getAdditionalCostsCentsFromOrder($order): int
    {
        // $original = $this->orderAdditionalCostsService->getAdditionalCostsCentsFromOrder($order);
        return 0;
    }
}
