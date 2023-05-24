<?php

namespace Domain\Position\DataTransferObjects;

class UserData
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {
    }
}
