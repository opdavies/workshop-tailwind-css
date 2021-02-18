<?php

namespace App\Repository;

interface SponsorRepository
{
    public function findByType(string $type): array;
}
