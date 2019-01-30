<?php

namespace app\controllers;


use RedBeanPHP\R;

class CategoryController extends AppController {

	private $id = '';

	public function articleAction() {
		if ($this->getRequest()) {
			$article = $this->getArticle();
			$article = $this->getTags($article);
			$article['content'] = $this->replaceBB($article['content']);
			$category = $article['category'];
			$this->setMeta($article->title);
			$this->setData(compact('article', 'category'));
		}
	}

	private function getRequest() {
		if (isset($_GET['id'])) {
			$this->id = $_GET['id'];
			return true;
		} else {
			throw new \Exception('Страница не найдена', 404);
		}
	}

	private function replaceBB($content) {
		$codes = require_once CONFIG . '/bb_codes.php';
		foreach ($codes as $code => $tag) {
			$content = str_replace($code, $tag, $content);
		}
		return $content;
	}

	private function getArticle() {
		return R::findOne('articles', "id = {$this->id}");
	}

	private function getTags($article) {
		$tags = explode("/", $article['tags']);
		$article['tags'] = $tags;
		return $article;
	}

}