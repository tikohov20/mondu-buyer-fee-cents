<?php

namespace OxidEsales\MonduBuyerFeeCents;

class BuyerFeeCents implements \OxidEsales\MonduPayment\Services\BuyerFeeCentsServiceInterface
{
    public function getBuyerFeeCentsFromBasked($basket): int
    {
        return 0;
    }

    public function getBuyerFeeCentsFromOrder($order): int
    {
        return 0;
    }
}