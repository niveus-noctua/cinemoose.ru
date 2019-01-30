<?php

namespace fadeout\base;


abstract class Controller {

	protected $route;
	protected $controller;
	protected $view;
	protected $model;
	protected $prefix;
	protected $layout;
	protected $data = [];
	protected $meta = [
		'title' => '',
		'description' => '',
		'keywords' => ''];

	public function __construct($route) {
		$this->route = $route;
		$this->controller = $route['controller'];
		$this->view = $route['action'];
		$this->model = $route['controller'];
		$this->prefix = $route['prefix'];
	}

	// TODO возможно переименовать в setData()
	public function setData($data) {
		$this->data = $data;
	}

	public function setMeta($title = '', $description = '', $keywords = '') {
		$this->meta['title'] = $title;
		$this->meta['description'] = $description;
		$this->meta['keywords'] = $keywords;
	}

	public function getView() {
		$viewObject = new View($this->route, $this->layout, $this->view, $this->meta);
		$viewObject->render($this->data);
	}

}