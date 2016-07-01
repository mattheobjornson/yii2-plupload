<?php

namespace indicalabs\plupload\widgets;

use Yii;
use yii\helpers\Html;

/**
 * Plupload bootstrap widget.
 *
 * @author 
 */
class BSWidget extends \yii\base\Widget
{
	/**
	 * @var array the HTML attributes for the widget container tag.
	 */
	public $options = [];
	/**
	 * @var array settings
	 */
	public $settings = [];

	public function init()
	{
		parent::init();
	}
	
	public function run()
	{
		$view = $this->getView();
		CoreWidgetAsset::register($view);

		// TODO
		
		$view->registerJs("
		");
	}
}
