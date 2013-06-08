<?php
namespace Googleanalytics\View\Helper;

use Zend\View\Helper\AbstractHelper;

class GATracker extends AbstractHelper
{
	/**
	 * PropertyId of GA Account
	 * @var string
	 */
	private $property_id;

	/**
	 * Invoke view helper
	 */
	public function __invoke()
	{
		return $this->getView()->render('ga-snippet.phtml',
			array('propertyId' => $this->getPropertyId())
		);
	}

	/**
	 * @param string $propertyId
	 * @return GATracker
	 */
	public function setPropertyId($propertyId)
	{
		$this->property_id = $propertyId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPropertyId()
	{
		return $this->property_id;
	}
}