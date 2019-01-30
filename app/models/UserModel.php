<?php
/**
 * Created by PhpStorm.
 * User: niveus.noctua
 * Date: 14.12.2018
 * Time: 18:22
 */

namespace app\models;


use RedBeanPHP\R;

class UserModel extends AppModel {

	public $attributes = [
		'login' => '',
		'password' => '',
		'email' => '',
		'name' => ''
	];

	public $rules = [
		'required' => [
			['login'],
			['password'],
			['email'],
			['name'],
		],
		'email' => [
			['email']
		],
		'lengthMin' => [
			['password', 6]
		],
	];

	public function checkUnique() {
	    $user = R::findOne('user', 'login = ? OR email = ?', [$this -> attributes['login'], $this->attributes['email']]);
	    if ($user) {
	        if ($user->login == $this->attributes['login']) {
	            $this->errors['unique'][] = 'Пользователь с таким логином уже существует';
            }
	        if ($user->email == $this->attributes['email']) {
                $this->errors['unique'][] = 'Пользователь с таким адресом уже существует';
            }
	        return false;
        }
	    return true;
    }

    public function login($admin = false) {
		$login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
		$password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
		if ($login && $password) {
			if ($admin) {
				$user = R::findOne('user', "login = ? AND role = admin", [$login]);
			} else {
				$user = R::findOne('user', "login = ?", [$login]);
			}
			if ($user) {
				if (password_verify($password, $user->password)) {
					foreach ($user as $key => $value) {
						if ($key != 'password')
							$_SESSION['user'][$key] = $value;
					}
					return true;
				}
			}
		}
		return false;
	}

}