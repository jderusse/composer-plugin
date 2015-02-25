<?php

namespace Jderusse;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\CommandsProviderInterface;
use Jderusse\Console\Command\GreetCommand;

class Plugin implements CommandsProviderInterface, PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
    }

    public function getCommands()
    {
        return array(new GreetCommand());
    }
}
