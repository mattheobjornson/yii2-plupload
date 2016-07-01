<?php

namespace indicalabs\plupload\widgets;

use yii\web\AssetBundle;

/**
 * This declares the asset files required by Plupload UI Widget.
 *
 * @author 
 */
class UIWidgetAsset extends AssetBundle
{
	public $sourcePath = '@bower/plupload';
	public $publishOptions = [
		//'forceCopy'=> YII_DEBUG,
	];

	public $css = [
		'js/jquery.ui.plupload/css/jquery.ui.plupload.css',
	];

	public $js = [
		'js/jquery.ui.plupload/jquery.ui.plupload.js',
		//'plupload/plupload.full.min.js',
		//'main.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
		'yii\jui\JuiAsset',
		'indicalabs\plupload\widgets\CoreWidgetAsset',
	];
}