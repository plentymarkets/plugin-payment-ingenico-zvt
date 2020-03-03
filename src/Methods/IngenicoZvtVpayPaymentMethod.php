<?php


namespace IngenicoZvt\Methods;


use IngenicoZvt\Helper\IngenicoZvtHelper;

class IngenicoZvtVpayPaymentMethod extends IngenicoZvtPaymentMethod
{
    public function getName(): string
    {
        return IngenicoZvtHelper::$paymentMethods['VPAY'];
    }
}
