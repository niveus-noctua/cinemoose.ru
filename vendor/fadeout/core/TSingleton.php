<?php
/**
 * Created by PhpStorm.
 * User: niveus.noctua
 * Date: 30.11.2018
 * Time: 19:38
 */

namespace fadeout;


trait TSingleton {

    private static $instance;

    public static function instance() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}