<?php

declare(strict_types=1);

namespace Hyperdrive;

use Hyperdrive\Interfaces\MenuInterface;
use League\CLImate\CLImate;

abstract class Menu implements MenuInterface
{
    public CLImate $cli;
    public array $options;
    public string $choice;

    public function __construct()
    {
        $this->cli = new CLImate();
    }

    public function displayMenu(): void
    {
        $this->choice = $this->cli->radio("Select option", $this->options)->prompt();
    }
}