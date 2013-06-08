<?php
namespace Googleanalytics;

use Googleanalytics\View\Helper\GATracker;

class Module
{
	/**
	 * @return array
	 */
	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                )
			)
		);
	}

	/**
	 * @return array
	 */
	public function getViewHelperConfig()
	{
		return array(
			'factories'=> array(
				'googleAnalytics' => function($sm) {

					// get property id from config
					$conf = $sm->getServiceLocator()->get('Config');
					$propertyId = $conf['googleanalytics']['property_id'];

					// create helper
					$helper = new GATracker();
					$helper->setPropertyId($propertyId);
					return $helper;
				},
			),
		);
	}

	/**
	 * @return array
	 */
	public function getConfig()
	{
		$module = include __DIR__ . '/config/module.config.php';
		$google = include __DIR__ . '/config/googleanalytics.global.php';
		return array_merge($module, $google);
	}
}
