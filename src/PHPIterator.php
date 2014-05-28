<?php
/**
 * PHP-Phrogramming bridge iterator functions
 *
 * @author  USAMI Kenta <tadsan@zonu.me>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @global callable $GLOBALS['List']
 * @global callable $GLOBALS['Range']
 */

/**
 * List object
 *
 * @param  mixed    $x
 * @param  mixed    $y
 * @return callable Returns recursive cons cell
 */
$List = function () use (&$List, $false, $cons) {
    $vals = func_get_args();
    $v = array_shift($vals);

    return $cons($v, $vals ? call_user_func_array($List, $vals) : null);
};


/**
 * Range numbers list
 *
 * @param  int      $begin
 * @param  int      $end
 * @param  int      $step
 * @return callable Returns recursive cons cell
 */
$Range = function ($begin, $end, $step = 1) use (&$Range, $cons, $nil) {
    return $cons(
        $begin,
        ($begin <= $end) ? $Range($begin + $step, $end, $step)
                         : $nil
    );
};
