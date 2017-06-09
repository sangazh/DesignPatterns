<?php

namespace App\Ch11_3\LoginObservers;

use App\Ch11_3\Login;
use App\Ch11_3\Observable;
use App\Ch11_3\Observer;

abstract class LoginObserver implements Observer
{
    /**
     * @var \App\Ch11_3\Login
     */
    private $login;

    /**
     * LoginObserver constructor.
     *
     * @param \App\Ch11_3\Login $login
     */
    public function __construct(Login $login)
    {
        $this->login = $login;
        $login->attach($this);
    }

    public function update(Observable $observable)
    {
        if ($observable === $this->login) {
            $this->doUpdate($observable);
        }
    }

    abstract public function doUpdate(Login $login);
}