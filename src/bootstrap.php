<?php
/**
 * Phrogramming bootstrap
 *
 * @author  USAMI Kenta <tadsan@zonu.me>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 */

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});

// Phrogramming functions
include __DIR__ . '/boolean.php';
include __DIR__ . '/conditional.php';
include __DIR__ . '/data_structure.php';
include __DIR__ . '/iterator.php';

// PHP-Phrogramming bridge functions
include __DIR__ . '/PHPOperators.php';
include __DIR__ . '/PHPIterator.php';
