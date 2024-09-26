<?php

namespace App;

use Src\Services\EmailVerifyer;

class Application
{
    public function run(): array
    {
        $emails = [
            'asd@gmail.com'
        ];

        $verifyer = new EmailVerifyer();
        $result = [];

        foreach ($emails as $email) {
            $result[] = ['email' => $email, 'check' => $verifyer->verify($email)];
        }

        var_dump($result);
        return $result;

    }
}