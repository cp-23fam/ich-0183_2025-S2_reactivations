<?php

namespace App\Models;

class StudentInfo extends InfoBase
{
    protected int $yearArrived;

    public function __construct(string $fname, string $lname, $yearArrived)
    {
        parent::__construct($fname, $lname);
        $this->yearArrived = $yearArrived;
    }

    public function getLogin(): string
    {
        $login = parent::getLogin();
        $initials = $this->getInitials();
        $login .= "{$this->yearArrived}{$initials}";

        return $login;
    }
}
