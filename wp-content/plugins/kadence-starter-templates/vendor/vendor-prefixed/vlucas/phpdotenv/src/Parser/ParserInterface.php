<?php
/**
 * @license BSD-3-Clause
 *
 * Modified by kadencewp on 01-April-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace KadenceWP\KadenceStarterTemplates\Dotenv\Parser;

interface ParserInterface
{
    /**
     * Parse content into an entry array.
     *
     * @param string $content
     *
     * @throws \KadenceWP\KadenceStarterTemplates\Dotenv\Exception\InvalidFileException
     *
     * @return \KadenceWP\KadenceStarterTemplates\Dotenv\Parser\Entry[]
     */
    public function parse(string $content);
}
