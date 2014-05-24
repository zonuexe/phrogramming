<?php
/**
 * PHP-Phrogramming bridge operator functions
 *
 * @author  USAMI Kenta <tadsan@zonu.me>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @global callable $GLOBALS['Equals']
 * @global callable $GLOBALS['NotEquals']
 * @global callable $GLOBALS['isGraterThan']
 * @global callable $GLOBALS['isGraterOrEquals']
 * @global callable $GLOBALS['isLessThan']
 * @global callable $GLOBALS['isLessOrEquals']
 */

/**
 * @param  mixed    $x PHPValue
 * @param  mixed    $y PHPValue
 * @return callable
 */
$Equals = function ($x, $y) use ($true, $false) {
    return ($x === $y) ? $true : $false;
};

/**
 * @param  mixed    $x PHPValue
 * @param  mixed    $y PHPValue
 * @return callable    PHPValue
 */
$NotEquals = function ($x, $y) use ($Equals) {
    return $not($Equals($x, $y));
};

/**
 * @param  mixed    $x PHPValue
 * @param  mixed    $y PHPValue
 * @return callable    PHPValue
 */
$isGraterThan = function ($x, $y) {
    return $x > $y;
};

/**
 * @param  mixed    $x PHPValue
 * @param  mixed    $y PHPValue
 * @return callable    PHPValue
 */
$isGraterOrEquals = function ($x, $y) use ($Equals, $isGraterThan) {
    return $or($isGraterThan($x, $y), $Equals($x, $y));
};

/**
 * @param  mixed    $x PHPValue
 * @param  mixed    $y PHPValue
 * @return callable    PHPValue
 */
$isLessThan = function ($x, $y) {
    return $x < $y;
};

/**
 * @param  mixed    $x PHPValue
 * @param  mixed    $y PHPValue
 * @return callable    PHPValue
 */
$isLessOrEquals = function ($x, $y) use ($Equals, $isLessThan) {
    return $or($isLessThan($x, $y), $Equals($x, $y));
};

