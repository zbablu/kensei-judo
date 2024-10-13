<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by kadencewp on 01-April-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace KadenceWP\KadenceStarterTemplates\Symfony\Component\Mime\Part\Multipart;

use KadenceWP\KadenceStarterTemplates\Symfony\Component\Mime\Part\AbstractMultipartPart;
use KadenceWP\KadenceStarterTemplates\Symfony\Component\Mime\Part\MessagePart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class DigestPart extends AbstractMultipartPart
{
    public function __construct(MessagePart ...$parts)
    {
        parent::__construct(...$parts);
    }

    public function getMediaSubtype(): string
    {
        return 'digest';
    }
}
