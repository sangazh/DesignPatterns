<?php

namespace App\Ch11_3;

class Login implements Observable
{
    const LOGIN_USER_UNKNOWN = 1;
    const LOGIN_WRONG_PASS   = 2;
    const LOGIN_ACCESS       = 3;

    private $status    = [];
    private $observers = [];
    private $storage;

    /**
     * @param string $user
     * @param string $pass
     * @param string $ip
     *
     * @return bool
     */
    public function handelLogin($user, $pass, $ip)
    {
        $isValid = false;
        switch (rand(1, 3)) {
            case 1:
                $this->setStatus(self::LOGIN_ACCESS, $user, $ip);
                $isValid = true;
                break;
            case 2:
                $this->setStatus(self::LOGIN_WRONG_PASS, $user, $ip);
                $isValid = false;
                break;
            case 3:
                $this->setStatus(self::LOGIN_USER_UNKNOWN, $user, $ip);
                $isValid = false;
                break;
        }
        printf("returning %s\n", ($isValid ? "true" : "false"));

        $this->notify();

        return $isValid;
    }

    /**
     * @param int    $status
     * @param string $user
     * @param string $ip
     */
    private function setStatus($status, $user, $ip)
    {
        $this->status = [$status, $user, $ip];
    }

    /**
     * @return array
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        $this->observers = array_filter(
            $this->observers,
            function ($a) use ($observer) {
                return (!($a === $observer));
            }
        );
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}