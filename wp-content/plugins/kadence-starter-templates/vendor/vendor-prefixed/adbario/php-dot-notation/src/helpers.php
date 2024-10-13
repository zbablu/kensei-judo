<?php
/**
 * Dot - PHP dot notation access to arrays
 *
 * @author  Riku Särkinen <riku@adbar.io>
 * @link    https://github.com/adbario/php-dot-notation
 * @license https://github.com/adbario/php-dot-notation/blob/2.x/LICENSE.md (MIT License)
 *
 * Modified by kadencewp on 01-April-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

use KadenceWP\KadenceStarterTemplates\Adbar\Dot;

if (! function_exists('dot')) {
    /**
     * Create a new Dot object with the given items and optional delimiter
     *
     * @param  mixed  $items
     * @param  string $delimiter
     * @return \KadenceWP\KadenceStarterTemplates\Adbar\Dot
     */
    function dot($items, $delimiter = '.')
    {
        return new Dot($items, $delimiter);
    }
}
