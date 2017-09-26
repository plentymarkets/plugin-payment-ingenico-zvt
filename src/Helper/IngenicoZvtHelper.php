<?php
/**
 * author: ninoplettenberg
 */
namespace IngenicoZvt\Helper;


use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;

class IngenicoZvtHelper
{
	const PLUGIN_NAME = 'IngenicoZVT';
	
	const PLUGIN_KEY = "plenty_ingenico_zvt";
	
	const NO_PAYMENTMETHOD_FOUND = 'no_paymentmethod_found';
	
	private $paymentMethodRepository;
	
	public static $paymentMethods = [
		'UNKNOWN' => 'IngenicoZVT Unknown',
		'GIROCARD' => 'IngenicoZVT girocard',
		'ELECTRONIC-CASH' => 'IngenicoZVT Electronic-Cash',
		'MAESTRO' => 'IngenicoZVT Maestro',
		'VPAY' => 'IngenicoZVT V PAY',
		'GELDKARTE-GIROGO' => 'IngenicoZVT GeldKarte/Girogo',
		'MASTERCARD' => 'IngenicoZVT Mastercard',
		'VISA' => 'IngenicoZVT Visa',
		'VISA_ELECTRON' => 'IngenicoZVT Visa Electron',
		'AMERICAN-EXPRESS' => 'IngenicoZVT American Express',
		'JCB' => 'IngenicoZVT JCB'
		];
	
	//update if more clearing types added
	public static $cardTypeIds = [
		'UNKNOWN' => '0',
		'GIROCARD' => '5',
		'ELECTRONIC-CASH' => '2',
		'MAESTRO' => '46',
		'VPAY' => '13',
		'GELDKARTE-GIROGO' => '30',
		'MASTERCARD' => '6',
		'VISA' => '10',
		'VISA_ELECTRON' => '11',
		'AMERICAN-EXPRESS' => '8',
		'JCB' => '14'
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
					'pluginKey' => self::PLUGIN_KEY,
					'paymentKey' => $paymentKey,
					'name' => $paymentName
				);
				
				$this->paymentMethodRepository->createPaymentMethod($paymentMethodData);
			}
		}
	}
	
	public static function getCardIdForPaymentKey($paymentKeyToSearch) : int
	{
		foreach (IngenicoZvtHelper::$cardTypeIds as $paymentKey => $cardTypeId)
		{
			if ($paymentKey == $paymentKeyToSearch)
			{
				return (int) $cardTypeId;
			}
		}
	}
	
	private function getPaymentMethod($method)
	{
		$paymentMethods = $this->paymentMethodRepository->allForPlugin(self::PLUGIN_KEY);
		
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
}