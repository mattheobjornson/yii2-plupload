yii2-plupload
=============

Yii2 [Plupload](www.plupload.com) extension, provides simple widgets.

Installation
------------
Install package via composer : `composer require indica/yii2-plupload:dev-master`

Demo module
-----------
Add this to your modules config :
```php
	'plupload' => [
		'class' => 'indica\yii2plupload\Module',
	],
```
Then go to `http://your-app/plupload`

Usage
-----
```php
<?= \indica\yii2plupload\widgets\UIWidget::widget([
	'settings'=>[
		'url'=>['/controller/action'],
	],
]); ?>
```

To see the license to use actual plupload, see the below
Released under [GPLv2 License](https://github.com/moxiecode/plupload/blob/master/license.txt).