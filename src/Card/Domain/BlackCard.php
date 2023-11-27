<?php

declare(strict_types=1);

namespace App\Card\Domain;

final readonly class BlackCard extends Card
{
    public function __construct(
        public string $special,
    ) {}

}