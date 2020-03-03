<?php


namespace IngenicoZvt\Methods;

use IngenicoZvt\Helper\IngenicoZvtHelper;

class IngenicoZvtJcbPaymentMethod extends IngenicoZvtPaymentMethod
{
    public function getName(): string
    {
        return IngenicoZvtHelper::$paymentMethods['JCB'];
    }
}
