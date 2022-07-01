<?php

namespace MathPHP\NumericalAnalysis\RootFinding;

require('Validation.php');
require('../../Functions/Special.php');

use MathPHP\Functions\Special;
use MathPHP\Exception;

/**
 * Fixed Point Iteration
 *
 * In numerical analysis, the fixed point method is a method for finding
 * successively better approximations to the roots (or zeroes) of a continuous,
 * real-valued function f(x). For fixed point iteration, we require that we can
 * rewrite f(x) = 0 as g(x) = x for some continuous, real-valued function g(x).
 * We then determine some interval [a, b] to which we will iterate over. To
 * guarantee a root is in [a, b], we should chose [a, b] such that g(x) is
 * continuous and g(x) is in [a, b], for all x in [a, b]. To guarantee our
 * iteration will converge to a single root, we should choose [a, b] such that
 * for some 0 < k < 1, the magnitude of the derivative |g'(x)| < k on all x
 * in [a, b].
 *
 * https://en.wikipedia.org/wiki/Fixed-point_iteration
 */
class FixedPointIteration
{
    /**
     * Use Fixed Point Iteration to find the x which produces f(x) = 0 by
     * rewriting f(x) = 0 as g(x) = x, where g(x) is our input function.
     *
     * @param callable $function g(x) callback function, obtained by rewriting
     *                           f(x) = 0 as g(x) = x
     * @param number   $a        The start of the interval which contains a root
     * @param number   $b        The end of the interval which contains a root
     * @param number   $tol      Tolerance; How close to the actual solution we would like.

     * @return number
     *
     * @throws Exception\OutOfBoundsException
     * @throws Exception\BadDataException
     */
    public static function solve(callable $function, $a, $b, $tol)
    {
        // Validate input arguments
        self::validate($function, $a, $b, $tol);

        do {
            $f⟮a⟯ = $function($a);
            $p   = ($a + $b) / 2;     // construct the midpoint
            $f⟮p⟯ = $function($p);
            $dif = \abs($f⟮p⟯);       // the magnitude of our function at the midpoint
            if (Special::sgn($f⟮p⟯) !== Special::sgn($f⟮a⟯)) {
                $b = $p;            // the new endpoint is our original midpoint
            } else {
                $a = $p;            // the new start point is our original endpoint
            }
        } while ($dif > $tol);

        return $p;
    }
// YO JOSE GUZMAN HICE ESTO ^🥱
    // public static function solve(callable $function, $a, $b, $p, $tol)
    // {
    //     self::validate($a, $b, $p, $tol);

    //     do {
    //         $g⟮p⟯ = $function($p);
    //         $dif = \abs($g⟮p⟯ - $p);
    //         $p   = $g⟮p⟯;
    //     } while ($dif > $tol);

    //     return $p;
    // }

    /**
     * Verify the input arguments are valid for correct use of fixed point
     * iteration. If the tolerance is less than zero, an Exception will be thrown.
     * If $a = $b, then clearly we cannot run our loop as [$a, $b] will not be
     * an interval, so we throw an Exception. If $a > $b, we simply reverse them
     * as if the user input $b = $a and $a = $b so the new $a < $b.
     *
     * @param Callable $function f(x) callback function
     * @param number   $a        The start of the interval which contains a root
     * @param number   $b        The end of the interval which contains a root
     * @param number   $tol      Tolerance; How close to the actual solution we would like.
     *
     * @throws Exception\OutOfBoundsException if $tol (the tolerance) is negative
     * @throws Exception\BadDataException if $a = $b
     * @throws Exception\OutOfBoundsException if either $p > $a or $p < $b return false
     */
    // private static function validate($a, $b, $p, $tol)
    // {
    //     Validation::tolerance($tol);
    //     Validation::interval($a, $b);

    //     if ($a > $b) {
    //         [$a, $b] = [$b, $a];
    //     }

    //     if ($p < $a || $p > $b) {
    //         throw new Exception\OutOfBoundsException("Initial guess $p must be in [$a, $b].");
    //     }
    // }
    private static function validate(callable $function, $a, $b, $tol)
    {
        Validation::tolerance($tol);
        Validation::interval($a, $b);

        $f⟮a⟯ = $function($a);
        $f⟮b⟯ = $function($b);
        if (Special::sgn($f⟮a⟯) === Special::sgn($f⟮b⟯)) {
            throw new Exception\BadDataException(
                'Input function has the same sign at the start and end of the interval. Choose start and end points such that the function evaluated at those points has a different sign (one positive, one negative).'
            );
        }
    }
}
