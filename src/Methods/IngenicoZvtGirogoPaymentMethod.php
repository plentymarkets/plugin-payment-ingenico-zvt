<?php


namespace IngenicoZvt\Methods;


use IngenicoZvt\Helper\IngenicoZvtHelper;

class IngenicoZvtGirogoPaymentMethod extends IngenicoZvtPaymentMethod
{
    public function getName(): string
    {
        return IngenicoZvtHelper::$paymentMethods['GELDKARTE-GIROGO'];
    }
}
