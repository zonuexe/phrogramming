<?php
/**
 * test functions
 */

/**
 * @param mixed $expr
 */
$assert = function ($expr) {
    $value = is_callable($expr) ? $expr() : $expr;

    $if();
};
