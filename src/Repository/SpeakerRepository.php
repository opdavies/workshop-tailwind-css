<?php

declare(strict_types=1);

namespace App\Repository;

interface SpeakerRepository
{
    public function findFeatured(): array;
}
