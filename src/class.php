<?php
/**
 * Class mechanism for Phrogramming
 *
 * @author  USAMI Kenta <tadsan@zonu.me>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @global callable $GLOBALS['makeClass']
 */

/**
 * @param  callable &$parent
 * @param  callable &$child
 * @return callable
 */
$makeClass = function ($data) {
    return function () use $data {
        
    }
};

$myClass = $makeClass(
    [
        'name' => 'myClass',
    ]
);