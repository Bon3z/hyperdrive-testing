<?php

declare(strict_types=1);

namespace Hyperdrive\Game\MainLoop;

use Hyperdrive\Game\Game;
use Hyperdrive\GameSave\IntegrityController;

class GameLoop extends BaseGameLoop
{
    use IntegrityController;

    public function __construct(Game $game)
    {
        $this->game = $game;

        if($this->canStartGame())
        {
            $this->startGame();
        }
    }
}