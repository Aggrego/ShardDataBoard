<?php

declare(strict_types = 1);

namespace Aggrego\ShardDataBoard\Board;

use TimiTao\ValueObject\Utils\StringValueObject;

class State extends StringValueObject
{
    public function __construct(string $value)
    {
        parent::__construct(self::class, $value);
    }
}
