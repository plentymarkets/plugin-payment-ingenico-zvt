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
	
	private function getMerchantIdentifierKeyValue() : string
	{
		return trim($this->configRepository->get(IngenicoZvtHelper::getMerchantIdentifierKey()));
	}
	
	private function getMerchantSecretKeyValue() : string
	{
		return trim($this->configRepository->get(IngenicoZvtHelper::getMerchantSecretKey()));
	}
	
	private function isPluginConfigValid():boolean
	{
		if ($this->allConfigParamsSet())
		{
			return true;
		}
		return false;
	}
	
	private function allConfigParamsSet() : boolean
	{
		if(!StringHelper::isNullOrEmpty($this->getMerchantIdentifierKeyValue())
			&& !StringHelper::isNullOrEmpty($this->getMerchantSecretKeyValue())) //TODO
		{
			return true;
		}
		return false;
	}
}