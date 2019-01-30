<?php

namespace fadeout;


class Router {

    private static $routes = [];
    private static $route = [];

    public static function add($reg_exp, $route = []) {
        self::$routes[$reg_exp] = $route;
    }

    public static function getRoutes() {
        return self::$routes;
    }

    public static function getCurrentRoute() {
        return self::$route;
    }

    public static function dispatch($url) {
    	//отрезаем явные GET-параметры
		$url = self::removeQueryString($url);
        if (self::matchRoute($url)) {
            $controller = self::getController();
            if (class_exists($controller)) {
				$controllerObject = new $controller(self::$route);
				$action = self::getAction();
				if (method_exists($controllerObject, $action)) {
					$controllerObject->$action();
					$controllerObject->getView();
				}
			} else {
            	throw new \Exception("Контроллер $controller не найден", 404);
			}

        } else {
            throw new \Exception("Page not found", 404);
        }
    }

    public static function matchRoute($url) {
        foreach (self::$routes as $pattern => $route) {
        	if (preg_match("#{$pattern}#", $url, $matches)) {
        		foreach ($matches as $key => $value) {
        			if (is_string($key))
        				$route[$key] = $value;
				}

				if (empty($route['action']))
					$route['action'] = 'index';

				if (!isset($route['prefix']))
					$route['prefix'] = '';
				else
					$route['prefix'] .= '\\';

				self::$route = $route;
				return true;
			};
		}
		return false;
    }

	/**
	 * Вызывается если найдено соответствие в методе matchRoute()
	 * @return контроллер
	 */
    private static function getController() {
    	return 'app\controllers\\'
			. self::$route['prefix']
			. self::toUpperCamelCase(self::$route['controller'])
			. 'Controller';
	}

	/**
	 * Вызывается если найдено соответствие в методе matchRoute()
	 * @return имя action
	 */
	private static function getAction() {
    	return self::toLowerCamelCase(self::$route[action]) . 'Action';
	}

	private static function toUpperCamelCase($name) {
		$name = ucwords(str_replace('-', ' ', $name));
		return str_replace(' ', '', $name);
	}

	private static function toLowerCamelCase($name) {
		return lcfirst(self::toUpperCamelCase($name));
	}

	/**
	 * @param $url принимает строку запроса
	 * обрезает явные GET-параметры и возращает запрос без них (только контроллер и экшен)
	 * @return строка запроса
	 */
	private static function removeQueryString($url) {
		if ($url) {
			$params = explode('&', $url, 2);
			if (strpos($params[0], '=') === false) return rtrim($params[0], '/');
			return '';
		}
	}

}