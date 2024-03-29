<?php

namespace Domain\Employee\DataTransferObjects;

class EmployeeData
{
    public function __construct(
        public int $position_id,
        public string $first_name,
        public string $middle_name,
        public string $last_name,
    ) {
    }
}
