<?php


namespace app\controllers;

//TODO удалить
use app\models\RuleModel;
use RedBeanPHP\R;

class RuleController extends AppController {

	public function indexAction() {

	}

	public function addarticleAction() {
		if (!empty($_POST)) {
			$article = new RuleModel();
			$article->attributes['title'] = $_POST['title'];
			$article->attributes['content'] = $_POST['content'];
			$article->attributes['author'] = $_POST['author'];

			if (is_uploaded_file($_FILES['preview_image']['tmp_name'])) {
				$article->attributes['preview_image'] = $_FILES['preview_image']['name'];
				move_uploaded_file($_FILES["preview_image"]["tmp_name"],
					WWW . "/images/article_images/" . $_FILES["preview_image"]['name']);
			} else {
				echo 'не загружено';
			}
			$article->attributes['preview'] = mb_strimwidth($article->attributes['content'], 0, 20);
			$article->attributes['date'] = $_POST['date'];
			$article->attributes['category'] = $_POST['category'];
			if ($article->upload('articles')) {
				echo 'success';
			}
		}
	}

	public function showusersAction() {
		if (!empty($_POST) && isset($_POST['login'])) {
			$user_data = R::findOne('user', "login = ?", [$_POST['login']]);
			if ($user_data) {
				$this->setData(compact('user_data'));
			}
		}
		if (isset($_GET['id'])) {
			if ($_GET['delete'] == "true") {
				$id = $_GET['id'];
				$user = R::load('user', $id);
				R::trash($user);
			}
		}
		if (isset($_POST['login_change'])) {
			$query = $_POST;
			$user = R::findOne('user', 'login = ?', [$_POST['login_change']]);
			if ($user) {
				$user = R::load('user', $user['id']);
				$user->login = $query['login_change'];
				$user->email = $query['email_change'];
				$user->name = $query['name_change'];
				$user->role = $query['role_change'];
				R::store($user);
			}

		}
	}

}