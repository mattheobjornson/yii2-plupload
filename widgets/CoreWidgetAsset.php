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
	public $sourcePath = '@npm/plupload';
	
	public $publishOptions = [
		//'forceCopy'=> YII_DEBUG,
	];

	public $css = [
		//TODO to include a custom CSS with npm assets	
		//'style.css',
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
