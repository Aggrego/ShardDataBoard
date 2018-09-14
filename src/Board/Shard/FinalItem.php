<?php

declare(strict_types = 1);

namespace Aggrego\ShardDataBoard\Board\Shard;

use Aggrego\ShardDataBoard\Board\Data;
use Aggrego\Domain\Profile\Profile;

class FinalItem extends Item
{
    /** @var Data */
    private $data;

    public function __construct(Uuid $uuid, Profile $profile, Data $data)
    {
        parent::__construct($uuid, $profile);
        $this->data = $data;
    }

    public function getData(): Data
    {
        return $this->data;
    }
}