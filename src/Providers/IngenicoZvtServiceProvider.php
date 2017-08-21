<?php
/**
 * author: ninoplettenberg
 */
namespace IngenicoZvt\Providers;


use IngenicoZvt\Helper\IngenicoZvtHelper;
use IngenicoZvt\Methods\IngenicoZvtPaymentMethod;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodContainer;
use Plenty\Plugin\ServiceProvider;

class IngenicoZvtServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->getApplication()->register(IngenicoZvtRouteServiceProvider::class);
	}
	
	public function boot(IngenicoZvtHelper $helper, PaymentMethodContainer $container)
	{
		//Create new payment methods
		$helper->createMopIfNotExist();
		
		//Register new PaymentMethods
		foreach (IngenicoZvtHelper::$paymentMethods as $paymentKey => $paymentName)
		{
			$container->register(IngenicoZvtHelper::PLUGIN_NAME.'::'.$paymentKey,
				IngenicoZvtPaymentMethod::class,
				[]
			);
		}
	}
}