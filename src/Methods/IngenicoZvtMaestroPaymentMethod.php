<?php


namespace IngenicoZvt\Methods;


use IngenicoZvt\Helper\IngenicoZvtHelper;

class IngenicoZvtMaestroPaymentMethod extends IngenicoZvtPaymentMethod
{
    public function getName(): string
    {
        return IngenicoZvtHelper::$paymentMethods['MAESTRO'];
    }
}
