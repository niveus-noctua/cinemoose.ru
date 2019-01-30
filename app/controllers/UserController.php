<?php

namespace app\controllers;


use app\models\UserModel;

class UserController extends AppController {

	//TODO сделать редирект
	public function signinAction() {
		if (!empty($_POST)) {
			$user = new UserModel();
			if ($user->login()) {
				$_SESSION['success'] = "Вы успешно вошли";
			} else {
				$_SESSION['error'] = "Неправильный логин или пароль";
			}
		}
	}

	//TODO авторизовать пользователя после регистрации
	//TODO сделать редирект на главную страницу
	public function signupAction() {
	    $this->setMeta('Регистрация');
		if (!empty($_POST)) {
			$user = new UserModel();
			$data = $_POST;
			$user->load($data);
			if (!$user->validate($data) || !$user->checkUnique()) {
				debug($user->getErrors());
				//redirect()
			} else {
			    $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
			    if ($user->upload('user')) {
                    $_SESSION['success'] = 'Регистрация прошла успешно';
                    //redirect()
					$this->signinAction();
                } else {
			        $_SESSION['error'] = 'Ошибка при регистрации';
                }
			}
		}
	}

	public function profileAction() {

	}

	public function logoutAction() {
		if (isset($_SESSION['user'])) unset($_SESSION['user']);
		//header(PATH);
	}

}