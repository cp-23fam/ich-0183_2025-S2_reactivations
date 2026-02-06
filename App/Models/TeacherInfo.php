<?php

namespace App\Models;

class TeacherInfo extends InfoBase
{
    public function __construct(string $fname, string $lname)
    {
        return parent::__construct($fname, $lname);
    }

    public function getLogin(): string
    {
        $login = parent::getLogin();
        $initials = $this->getInitials();
        $login .= "{$initials}";

        return $login;
    }
}
