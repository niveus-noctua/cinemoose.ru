<?php


namespace fadeout\base;


class View {

	protected $route;
	protected $controller;
	protected $view;
	protected $model;
	protected $prefix;
	protected $layout;
	protected $data = [];
	protected $meta = [];

	public function __construct($route, $layout = '', $view = '', $meta) {
		$this->route = $route;
		$this->controller = $route['controller'];
		$this->view = $route['action'];
		$this->model = $route['controller'];
		$this->prefix = $route['prefix'];
		$this->meta = $meta;
		if ($layout === false) {
			$this->layout = false;
		} else {
			$this->layout = $layout ?: LAYOUT;
		}
	}

	public function render($data) {
		//извлекаем пришедшие из контроллера данные в переменные
		if (is_array($data)) extract($data);
		$viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
		if (is_file($viewFile)) {
			//включаем буферизацию вывода (вывод скрипта не отправляется, отправляются заголовки,
			//вывод скрипта сохраняется во внутрненнем буфере
			ob_start();
			require_once $viewFile;
			//сохраняем из буфера в переменную и очищаем буфер
			$content = ob_get_clean();
		} else {
			throw new \Exception("Не найден необходимый вид {$viewFile}", 500);
		}
		if ($this->layout !== false) {
			$layoutFile = APP . "/views/layouts/{$this->layout}.php";
			if (is_file($layoutFile))
				require_once $layoutFile;
			else
				throw new \Exception("Не найден шаблон {$layoutFile}", 500);
		}
	}

	public function getMeta() {
		$output = '<title>' . $this->meta['title'] . '</title>' . PHP_EOL;
		$output .= "\t" . '<meta name="description" content="' . $this->meta['description'] . '">' . PHP_EOL;
		$output .= "\t" . '<meta name="keywords" content="' . $this->meta['keywords'] . '">' . PHP_EOL;
		return $output;
	}

}