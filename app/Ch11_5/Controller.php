<?php

namespace App\Ch11_5;

class Controller
{
    private $context;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->context = new CommandContext();
    }

    /**
     * @return \App\Ch11_5\CommandContext
     */
    public function getContext()
    {
        return $this->context;
    }

    public function process()
    {
        $action = $this->context->get('action');
        $action = (is_null($action)) ? "default" : $action;
        $cmd = CommandFactory::getCommand($action);

        /** @var \App\Ch11_5\Commands\Command $cmd */
        if (! $cmd->execute($this->context)) {
            //handle failure
        } else {
            // success
            // dispatch view
        }
    }

}