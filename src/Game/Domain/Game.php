<?php

declare(strict_types=1);

use App\Card\Domain\Cards;
use App\Player\Domain\Player;
use App\Player\Domain\Players;

readonly class Game
{
    public function __construct(

    ) {}

    public function dealInitial(Players $players): void
    {
        foreach ($players as $player) {
            $player->hand = $this->deal($player);
        }
    }

    public function pickCzar(Players $players): Player
    {
        $poopTimes = [];
        foreach ($players as $player) {
            $poopTimes[] = $player->hoursSinceLastPoop;
        }
        $minPoopTime = min($poopTimes);

        foreach ($players as $player) {
            if ($player->hoursSinceLastPoop === $minPoopTime) {
                $player->isCardCzar = true;
                return $player;
            }
        }
    }

    private function deal(Player $player): Cards
    {
        return new Cards([]);
    }
}