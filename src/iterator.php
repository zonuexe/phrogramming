<?php
/**
 * Iterator functions for Phrogramming
 *
 * @author  USAMI Kenta <tadsan@zonu.me>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @global callable $GLOBALS['for']
 */

/**
 * Iterate function by list (cons-cell)
 *
 * @param  mixed    $x
 * @param  mixed    $y
 * @return callable    Returns `$x`
 */
$for = function ($list, callable $call) use (&$for, $car, $cdr, $is_nil, $nil, $if) {
    $call($car($list));

    return $if(
        $is_nil($cdr($list)),
        $nil,
        $for($cdr($list), $call)
    );
};
