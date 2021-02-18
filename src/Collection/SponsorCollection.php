<?php

declare(strict_types=1);

namespace App\Collection;

use Tightenco\Collect\Support\Collection;

final class SponsorCollection extends Collection
{
    public function byType(string $type): self
    {
        return $this->filter(function (array $sponsor) use ($type): bool {
            return $sponsor['type'] == $type;
        });
    }
}
