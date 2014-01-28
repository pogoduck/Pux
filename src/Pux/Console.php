<?php
namespace Pux;
use CLIFramework\Application;

class Console extends Application
{
    const NAME = 'phpux';
    const VERSION = "1.4.1";

    public function init()
    {
        parent::init();
        $this->registerCommand('compile');
    }

    public function brief()
    {
        return 'Pux - High Performance PHP Router.';
    }
}
