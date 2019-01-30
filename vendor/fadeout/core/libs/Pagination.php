<?php
/**
 * Created by PhpStorm.
 * User: niveus.noctua
 * Date: 23.12.2018
 * Time: 18:46
 */

namespace fadeout\libs;


class Pagination {

	public $currentPage;
	public $perpage;
	public $total;
	public $pageCount;
	public $uri;
	public $links = [
		'back' => '',
		'forward' => '',
		'startpage' => '',
		'endpage' => '',
		'page2left' => '',
		'page2right' => '',
		'page1left' => '',
		'page1right' => ''
	];

	public function __construct($page, $pagination, $total) {

		$this->perpage = $pagination;
		$this->total = $total;

	}

}