<?php
/**
 * Created by PhpStorm.
 * User: niveus.noctua
 * Date: 01.12.2018
 * Time: 1:38
 */

namespace fadeout;


class ErrorHandler {

    public function __construct() {
        if (DEBUG) error_reporting(-1);
        else error_reporting(0);
        set_exception_handler([$this, 'exeptionHandler']);
    }

    public function exeptionHandler($exeption) {
        $this->logErrors($exeption->getMessage(), $exeption->getFile(), $exeption->getLine());
        $this->displayError(
            'Исключение',
            $exeption->getMessage(),
            $exeption->getFile(),
            $exeption->getLine(),
            $exeption->getCode()
        );
    }

    protected function logErrors($message = '', $file = '', $line = '') {
        error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: 
        {$message} | Файл: {$file} | Строка: {$line}" . SEPARATOR, 3, TEMP . '/error.log');
    }

    protected function displayError($error_number, $error_string, $error_file, $error_line, $response = 404) {
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require WWW . '/errors/404.php';
            die;
        }
        if (DEBUG) {
            require WWW . '/errors/dev.php';
        } else {
            require WWW . '/errors/prod.php';
        }
    }

}