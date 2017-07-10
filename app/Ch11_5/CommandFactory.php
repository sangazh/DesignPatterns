<?php

namespace App\Ch11_5;

class CommandFactory
{
    private static $dir = 'commands';

    /**
     * @param string $action
     *
     * @return \App\Ch11_5\Command
     * @throws \App\Ch11_5\CommandNotFoundException
     * @throws \Exception
     */
    public static function getCommand($action = 'Default')
    {
        if (preg_match('/\W/', $action)) {
            throw new \Exception("illegal characters in action");
        }
        $class = __NAMESPACE__ . "\\commands\\" . UCFirst(strtolower($action)) . "Command";

        if (!class_exists($class)) {
            throw new CommandNotFoundException("no '$class' class located");
        }

        $cmd = new $class();

        return $cmd;
    }

}