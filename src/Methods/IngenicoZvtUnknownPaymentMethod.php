<?php


namespace IngenicoZvt\Methods;

use IngenicoZvt\Helper\IngenicoZvtHelper;

class IngenicoZvtUnknownPaymentMethod extends IngenicoZvtPaymentMethod
{
    public function getName(): string
    {
        return IngenicoZvtHelper::$paymentMethods['UNKNOWN'];
    }
}
