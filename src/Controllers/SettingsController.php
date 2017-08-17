<?php

namespace IngenicoZvt\Controllers;


use IngenicoZvt\Helper\IngenicoZvtHelper;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;

class SettingsController extends Controller
{
    public function configuration(Request $request)
	{
		$configRepository = pluginApp(ConfigRepository::class);
		
		$response['merchant_identifier'] = $configRepository->get(IngenicoZvtHelper::getMerchantIdentifierKey());
		$response['merchant_secret_key'] = $configRepository->get(IngenicoZvtHelper::getMerchantSecretKey());
		$response['channelId'] = $configRepository->get(IngenicoZvtHelper::getChannelId());
		
		/**
		 * @var $mopRepository PaymentMethodRepositoryContract
		 */
		$mopRepository = pluginApp(PaymentMethodRepositoryContract::class);
		
		$mopModels = $mopRepository->allForPlugin(IngenicoZvtHelper::PLUGIN_KEY);
		foreach ($mopModels as $mopModel)
		{
			$response['methodOfPayment'][] = $mopModel->toArray();
		}
		
		return $response;
	}
}