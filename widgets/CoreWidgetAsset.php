<?php

namespace indicalabs\plupload\widgets;

use yii\web\AssetBundle;

/**
 * This declares the asset files required by Plupload Core.
 *
 * @author 
 */
class CoreWidgetAsset extends AssetBundle
{
	public $sourcePath = '@bower/plupload';
	
	public $publishOptions = [
		//'forceCopy'=> YII_DEBUG,
	];

	public $css = [
		'@vendor/indicalabs/plupload/assets/style.css',
	];

	public $js = [
		'js/moxie.min.js',
		'js/plupload.min.js',
		'js/i18n/en.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];
}
