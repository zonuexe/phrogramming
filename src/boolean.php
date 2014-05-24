<?php
/**
 * Boolean objects and Logical functions for Phrogramming
 *
 * @author  USAMI Kenta <tadsan@zonu.me>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @global callable $GLOBALS['true']
 * @global callable $GLOBALS['false']
 * @global callable $GLOBALS['not']
 * @global callable $GLOBALS['and']
 * @global callable $GLOBALS['or']
 */

/**
 * Phrogramming boolean value
 *
 * @param  mixed    $x
 * @param  mixed    $y
 * @return callable    Returns `$x`
 */
$true = function ($x, $y) { return $x; };

/**
 * Phrogramming boolean value
 *
 * @param  mixed    $x
 * @param  mixed    $y
 * @return callable    Returns `$y`
 */
$false = function ($x, $y) { return $y; };

/**
 * Logical function for Phrogramming boolean
 *
 * @param  callable $v boolean
 * @return callable    boolean
 */
$not = function (callable $v) use ($true, $false) {
    return $v($false, $true);
};

/**
 * Logical function for Phrogramming boolean
 *
 * @param  callable $x boolean
 * @param  callable $y boolean
 * @return callable    boolean
 */
$and = function (callable $x, callable $y) use ($false) {
    return $x($y, $false);
};

/**
 * Logical function for Phrogramming boolean
 *
 * @param  callable $x boolean
 * @param  callable $y boolean
 * @return callable    boolean
 */
$or = function (callable $x, callable $y) use ($true) {
    return $x($true, $y);
};
