<?php
/**
 * @license MIT
 *
 * Modified by kadencewp on 01-April-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

/*
 * This file is part of Result Type.
 *
 * (c) Graham Campbell <hello@gjcampbell.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KadenceWP\KadenceStarterTemplates\GrahamCampbell\ResultType;

/**
 * @template T
 * @template E
 */
abstract class Result
{
    /**
     * Get the success option value.
     *
     * @return \KadenceWP\KadenceStarterTemplates\PhpOption\Option<T>
     */
    abstract public function success();

    /**
     * Map over the success value.
     *
     * @template S
     *
     * @param callable(T):S $f
     *
     * @return \KadenceWP\KadenceStarterTemplates\GrahamCampbell\ResultType\Result<S,E>
     */
    abstract public function map(callable $f);

    /**
     * Flat map over the success value.
     *
     * @template S
     * @template F
     *
     * @param callable(T):\KadenceWP\KadenceStarterTemplates\GrahamCampbell\ResultType\Result<S,F> $f
     *
     * @return \KadenceWP\KadenceStarterTemplates\GrahamCampbell\ResultType\Result<S,F>
     */
    abstract public function flatMap(callable $f);

    /**
     * Get the error option value.
     *
     * @return \KadenceWP\KadenceStarterTemplates\PhpOption\Option<E>
     */
    abstract public function error();

    /**
     * Map over the error value.
     *
     * @template F
     *
     * @param callable(E):F $f
     *
     * @return \KadenceWP\KadenceStarterTemplates\GrahamCampbell\ResultType\Result<T,F>
     */
    abstract public function mapError(callable $f);
}
