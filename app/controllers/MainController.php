<?php

namespace app\controllers;


use fadeout\App;
use fadeout\base\Controller;
use fadeout\Cache;
use RedBeanPHP\R;

class MainController extends AppController {

	public function indexAction() {
		$hat = R::find('hat', 'LIMIT 3');
		//статьи для превью главной страницы
		$mp_articles = R::find('articles', "new = '1' ORDER BY articles.date DESC LIMIT 3 ");
		$tags = $this->getTags($mp_articles);
		$category = 'main';

		$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
		$pagination = App::$app->getProperty('pagination');

		//TODO изменить описание главной страницы, добавить ключевики
		$this->setMeta('Главная страница', 'Описание главной страницы', 'ключевые слова');
		$this->setData(compact('hat', 'mp_articles', 'tags', 'category'));
		//$this->setData(compact('mp_articles'));
	}

	private function getTags(array $mp_articles) {
		foreach ($mp_articles as $article) {
			$tags = explode("/", $article['tags']);
			$temp = [];
			foreach ($tags as $tag) {
				if (array_key_exists($tag, $temp))
					continue;
				$temp[$tag] = '';
			}
		}
		return $temp;
	}
}