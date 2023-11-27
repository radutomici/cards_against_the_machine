<?php

namespace App\Card\Domain;

final readonly class Cards
{
    /**
     * @param Card[] $cards
     */
    public function __construct(
        public array $cards,
    ) {}

}