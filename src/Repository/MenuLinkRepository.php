<?php

declare(strict_types=1);

namespace App\Repository;

interface MenuLinkRepository
{
    public function findAll(): array;
}
