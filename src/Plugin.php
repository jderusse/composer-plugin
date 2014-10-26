<?php

namespace Jderusse;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Jderusse\Console\Command\GreetCommand;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $application = $composer->getApplication() and $application->add(new GreetCommand());
    }
}
