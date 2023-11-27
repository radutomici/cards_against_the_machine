<?php

declare(strict_types=1);

namespace App\Player\Domain;

use App\Card\Domain\Cards;

final readonly class Player
{

    public function __construct(
        public string $name,
        public int $hoursSinceLastPoop,
        public bool $isCardCzar,
        public Cards $hand,
    ) {}
}

