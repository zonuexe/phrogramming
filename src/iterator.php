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
$for = function ($list, callable $call) use ($car, $cdr) {
    $val = $car($cell);
    while ($is_nil($val)) {
        $call($val);
        $cell = $cdr($cell);
        $val = $car($cell);
    }
};
