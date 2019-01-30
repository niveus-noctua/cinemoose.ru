<?php
/**
 * Created by PhpStorm.
 * User: niveus.noctua
 * Date: 26.12.2018
 * Time: 18:11
 */

namespace app\models;


class RuleModel extends AppModel {

	public $attributes = [
		'title' => '',
		'content' => '',
		'author' => '',
		'preview_image' => '',
		'preview' => '',
		'date' => '',
		'category' => '',
	];

}