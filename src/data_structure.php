<?php
/**
 * Data structure objects for Phrogramming
 *
 * @author  USAMI Kenta <tadsan@zonu.me>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @global callable $GLOBALS['cons']
 * @global callable $GLOBALS['pair']
 * @global callable $GLOBALS['car']
 * @global callable $GLOBALS['cdr']
 * @global callable $GLOBALS['cadr']
 * @global callable $GLOBALS['second']
 * @global callable $GLOBALS['third']
 * @global callable $GLOBALS['nil']
 * @global callable $GLOBALS['is_nil']
 */

/**
 * Cons cell object
 *
 * @param  mixed    $x
 * @param  mixed    $y
 * @return callable    Returns tuple object
 */
$cons = function ($x, $y) {
    return function ($cond) use ($x, $y) {
        return $cond($x, $y);
    };
};

/**
 * Pair (2-tuple) object
 *
 * @param  mixed    $x
 * @param  mixed    $y
 * @return callable    Returns tuple object
 */
$pair = $cons;

/**
 * CAR function for cons cell
 *
 * @param callable $cell Cons cell
 */
$car = function ($cell) use ($true) {
    return $cell($true);
};

/**
 * CDR function for cons cell
 *
 * @param callable $cell Cons cell
 */
$cdr = function ($cell) use ($false) {
    return $cell($false);
};

/**
 * CADR function for cons cell
 *
 * @param callable $cell Cons cell
 */
$cadr = function ($cell) use ($car, $cdr) {
    return $car($cdr($cell));
};

/**
 * Get second element by List
 *
 * @param callable $cell Cons cell
 */
$second = $cadr;

/**
 * Get third element by List
 *
 * @param callable $cell Cons cell
 */
$third = function ($cell) use ($car, $cdr) {
    return $car($cdr($cdr($cell)));
};

/**
 * NIL (empty list) value
 */
$nil = $cons($false, $false);


/**
 * Is $val NIL Value?
 *
 * @param  mixed    $val
 * @return callable ($true|$false)
 */
$is_nil = function ($val) use ($false, $and, $not, $car, $cadr) {
    return is_callable($val) ? $not($and($car($val), $cadr($val))) : $false;
};
