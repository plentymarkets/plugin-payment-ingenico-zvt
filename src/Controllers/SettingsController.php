<?php
/**
 * author: ninoplettenberg
 */
namespace IngenicoZvt\Controllers;


use IngenicoZvt\Helper\IngenicoZvtHelper;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;

class SettingsController extends Controller
{
	/**
	 * @param Request $request
	 * @return array
	 */
    public function configuration(Request $request, ConfigRepository $configRepository)
	{
		/**
		 * @var $mopRepository PaymentMethodRepositoryContract
		 */
		$mopRepository = pluginApp(PaymentMethodRepositoryContract::class);
		
		$mopModels = $mopRepository->allForPlugin(IngenicoZvtHelper::PLUGIN_KEY);
		foreach ($mopModels as $mopModel)
		{
			$response['methodsOfPayment'][] = $mopModel->toArray();
		}
		
		for($i = 0; $i < count($response['methodsOfPayment']); $i++)
		{
			$paymentKey = $response['methodsOfPayment'][$i]['paymentKey'];
			$response['methodsOfPayment'][$i]['cardTypeId'] = IngenicoZvtHelper::getCardIdForPaymentKey($paymentKey);
		}
		
		return $response;
	}
}