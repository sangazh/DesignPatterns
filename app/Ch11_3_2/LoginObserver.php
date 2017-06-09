<?php

namespace App\Ch11_3_2;

use SplSubject;

abstract class LoginObserver implements \SplObserver
{
    private $login;

    /**
     * LoginObserver constructor.
     *
     * @param $login
     */
    public function __construct(Login $login)
    {
        $this->login = $login;
        $login->attach($this);
    }

    /**
     * Receive update from subject
     *
     * @link  http://php.net/manual/en/splobserver.update.php
     *
     * @param SplSubject $subject <p>
     *                            The <b>SplSubject</b> notifying the observer of an update.
     *                            </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        if ($subject === $this->login) {
            $this->doUpdate($subject);
        }
    }

    abstract public function doUpdate(Login $login);
}