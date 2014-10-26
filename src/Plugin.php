<?php

namespace Jderusse;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PluginCommandInterface;
use Jderusse\Console\Command\GreetCommand;

class Plugin implements PluginCommandInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
    }

    public function getCommands()
    {
        return array(new GreetCommand());
    }
}
