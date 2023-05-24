<?php

namespace Domain\Position\DataTransferObjects;

class PositionData
{
    public function __construct(
        public string $position,
    )
    {
    }
}
