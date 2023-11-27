<?php

namespace App\Player\Domain;

final readonly class Players
{
    /**
     * @param Player[] $players
     */
    public function __construct(
        public array $players,
    ) {}
}
