<?php
/**
 * author: ninoplettenberg
 */
namespace IngenicoZvt\Methods;


use IngenicoZvt\Helper\IngenicoZvtHelper;
use IngenicoZvt\Helper\StringHelper;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodService;
use Plenty\Plugin\ConfigRepository;

class IngenicoZvtPaymentMethod extends PaymentMethodService
{
	private $configRepository;
	
	public function __construct(ConfigRepository $configRepository)
	{
		$this->configRepository = $configRepository;
	}
	
	//TODO needed?
	public function isActive():bool
	{
		return true;
	}
	
	public function getName():string
	{
		return IngenicoZvtHelper::PLUGIN_NAME;
	}
}