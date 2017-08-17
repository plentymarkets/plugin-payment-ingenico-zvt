<?php

namespace IngenicoZvt\Helper;


use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;

class IngenicoZvtHelper
{
	const PLUGIN_NAME = 'Ingenico';
	
	const NO_PAYMENTMETHOD_FOUND = 'no_paymentmethod_found';
	
	private $paymentMethodRepository;
	
	public static $paymentMethods = [
		'UNKOWN' => 'IngenicoZVT Unknown'
		];
	
	public function __construct(PaymentMethodRepositoryContract $paymentMethodRepositoryContract)
	{
		$this->paymentMethodRepository = $paymentMethodRepositoryContract;
	}
	
	public function createMopIfNotExist()
	{
		foreach (self::$paymentMethods as $paymentKey => $paymentName)
		{
			if ($this->getPaymentMethod($paymentKey) == self::NO_PAYMENTMETHOD_FOUND)
			{
				$paymentMethodData = array(
					'pluginKey' => self::PLUGIN_NAME,
					'paymentKey' => $paymentKey,
					'name' => $paymentName
				);
				
				$this->paymentMethodRepository->createPaymentMethod($paymentMethodData);
			}
		}
	}
	
	private function getPaymentMethod($method)
	{
		$paymentMethods = $this->paymentMethodRepository->allForPlugin(self::PLUGIN_NAME);
		
		if(!is_null($paymentMethods))
		{
			foreach ($paymentMethods as $paymentMethod)
			{
				if ($paymentMethod->paymentKey == $method)
				{
					return $paymentMethod->id;
				}
			}
		}
		
		return self::NO_PAYMENTMETHOD_FOUND;
	}
	
	public static function getMerchantIdentifierKey()
	{
		return self::PLUGIN_NAME.'.merchant_identifier';
	}
	
	public static function getMerchantSecretKey()
	{
		return self::PLUGIN_NAME.'.merchant_secret_key';
	}
	
	public static function getChannelId()
	{
		return self::PLUGIN_NAME.'.channel_id';
	}
}