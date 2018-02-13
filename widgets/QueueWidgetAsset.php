<?php

namespace indicalabs\plupload\widgets;

use yii\web\AssetBundle;

/**
 * This declares the asset files required by Plupload Queue Widget.
 *
 * @author 
 */
class QueueWidgetAsset extends AssetBundle
{
	public $sourcePath = '@bower/plupload';
	public $publishOptions = [
		//'forceCopy'=> YII_DEBUG,
	];

	public $css = [
		'js/jquery.plupload.queue/css/jquery.plupload.queue.css',
	];

	public $js = [
		'js/jquery.plupload.queue/jquery.plupload.queue.min.js',
	];

	public $depends = [
		'indicalabs\plupload\widgets\CoreWidgetAsset',
	];
}