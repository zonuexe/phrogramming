<?php
/**
 * Conditional switch functions for Phrogramming
 *
 * @author  USAMI Kenta <tadsan@zonu.me>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @global callable $GLOBALS['if']
 */

/**
 * Condition switching function
 *
 * @param callable $cond
 * @param callable $then
 * @param callable $else
 */
$if = function ($cond, $then, $else) {
    return $cond($then, $else);
};
