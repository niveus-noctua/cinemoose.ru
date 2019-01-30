<?php
/**
 * Created by PhpStorm.
 * User: niveus.noctua
 * Date: 03.12.2018
 * Time: 19:33
 */

namespace fadeout\base;
use fadeout\Db;
use RedBeanPHP\R;
use Valitron\Validator;


abstract class Model {

	//массив свойств модели совпадающий с полями базы данных
	public $attributes = [];
	public $errors = [];
	public $rules = [];

	public function __construct() {
		Db::instance();
	}

	public function load($data) {
		foreach ($this->attributes as $key => $value) {
			if (isset($data[$key])) {
				$this->attributes[$key] = $data[$key];
			}
		}
	}

	public function upload($table) {
        $bean = R::dispense($table);
        foreach ($this->attributes as $attribute => $value) {
            $bean->$attribute = $value;
        }

        return R::store($bean);
    }

	public function validate($data) {
		Validator::lang('ru');
		$validator = new Validator($data);
		$validator->rules($this->rules);
		if ($validator->validate())
			return true;
		$this->errors = $validator->errors();
		return false;
	}

	public function getErrors() {
		$errors = '<ul>';
		foreach ($this->errors as $error) {
			foreach ($error as $item) {
				$errors .= "<li>$item</li>";
			}
		}
		$errors .= '</ul>';
		$_SESSION['error'] = $errors;
	}

}