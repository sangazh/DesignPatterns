<?php

namespace App\Ch11_5;

class CommandContext
{
    private $params = [];
    private $error  = "";

    /**
     * CommandContext constructor.
     */
    public function __construct()
    {
        $this->params = $_REQUEST;
    }

    /**
     * @param string $key
     * @param        $val
     */
    public function addParam($key, $val)
    {
        $this->params[$key] = $val;
    }

    /**
     * @param $key
     *
     * @return mixed|null
     */
    public function get($key)
    {
        if (isset($this->params[$key])) {
            return $this->params[$key];
        }
        return null;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }

}