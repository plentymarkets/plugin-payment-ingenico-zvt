<?php


namespace IngenicoZvt\Methods;


use IngenicoZvt\Helper\IngenicoZvtHelper;

class IngenicoZvtGirocardPaymentMethod extends IngenicoZvtPaymentMethod
{
    public function getName(): string
    {
        return IngenicoZvtHelper::$paymentMethods['GIROCARD'];
    }
}
