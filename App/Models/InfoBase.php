<?php

namespace App\Models;

class InfoBase
{
    protected string $fname;
    protected string $lname;

    public function __construct(string $fname, string $lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function getFirstName(): string
    {
        return $this->fname;
    }

    public function getLastName(): string
    {
        return $this->lname;
    }

    public function getFullName(): string
    {
        return "{$this->fname} {$this->lname}";
    }

    public function getLogin(): string
    {
        return 'cp-';
    }

    protected function getInitials(): string
    {
        $initials = substr($this->fname, 0, 2) . substr($this->lname, 0, 1);
        $initials = strtolower($initials);

        return $initials;
    }
}
