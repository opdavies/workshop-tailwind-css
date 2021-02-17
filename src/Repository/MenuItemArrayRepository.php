<?php

declare(strict_types=1);

namespace App\Repository;

final class MenuItemArrayRepository implements MenuItemRepository
{
    public function findAll(): array
    {
        return [
            [
                'title' => 'Conference',
                'is_active' => false,
            ],
            [
                'title' => 'Sponsors',
                'is_active' => false,
            ],
            [
                'title' => 'Community',
                'is_active' => false,
            ],
            [
                'title' => 'FAQ',
                'is_active' => false,
            ],
            [
                'title' => 'Register',
                'is_active' => true,
            ],
        ];
    }
}
