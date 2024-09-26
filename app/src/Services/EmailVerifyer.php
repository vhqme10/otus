<?php

namespace Src\Services;

class EmailVerifyer
{
    public function __construct()
    {
    }

    public function verify(string $email): bool
    {
        return preg_match('/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+)/', $email);
    }
}