<?php

declare(strict_types=1);

namespace App\Card\Domain;

readonly class Card
{
    public function __construct(
        public string $id,
        public string $text,
    ) {}
}