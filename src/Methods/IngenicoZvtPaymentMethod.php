<?php

namespace IngenicoZvt\Methods;


use IngenicoZvt\Helper\IngenicoZvtHelper;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodService;
use Plenty\Plugin\ConfigRepository;

class IngenicoZvtPaymentMethod extends PaymentMethodService
{
	private $configRepository;
	
	public function __construct(ConfigRepository $configRepository)
	{
		$this->configRepository = $configRepository;
	}
	
	public function isActive():bool
	{
		if($this->isPluginConfigValid())
		{
			return true;
		}
		return false;
	}
	
	public function getName():string
	{
		return IngenicoZvtHelper::PLUGIN_NAME;
	}
	
	//private functions for config values
	
	private function isPluginConfigValid():boolean
	{
		if (true) //TODO
		{
			return true;
		}
		return false;
	}
}