<?php
/**
 * Created by PhpStorm.
 * User: niveus.noctua
 * Date: 03.12.2018
 * Time: 19:57
 */

namespace fadeout;
use \RedBeanPHP\R as R;


class Db {

	use TSingleton;

	private function __construct() {
		$db = require_once CONFIG . '/db_config.php';
		R::setup($db['dsn'], $db['user'], $db['pass']);
		if (!R::testConnection()) {
			throw new \Exception('Нет соединения с базой данных', 500);
		}
		R::freeze(true);
		if (DEBUG) {
			R::debug(true, 1);
		}
	}
}