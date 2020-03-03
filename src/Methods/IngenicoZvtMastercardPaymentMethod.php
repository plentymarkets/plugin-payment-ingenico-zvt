<?php


namespace IngenicoZvt\Methods;


use IngenicoZvt\Helper\IngenicoZvtHelper;

class IngenicoZvtMastercardPaymentMethod extends IngenicoZvtPaymentMethod
{
    public function getName(): string
    {
        return IngenicoZvtHelper::$paymentMethods['MASTERCARD'];
    }
}
