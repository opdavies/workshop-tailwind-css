<?php

declare(strict_types=1);

namespace App\Repository;

final class MenuLinkArrayRepository implements MenuLinkRepository
{
    public function findAll(): array
    {
        return [
            [
                'name' => 'Conference',
                'children' => [
                    ['name' => 'Trainings'],
                    ['name' => 'Contribution Day'],
                    ['name' => 'About FLDC'],
                    ['name' => 'Speaker Info'],
                    ['name' => 'Contact'],
                ],
            ],
            [
                'name' => 'Sponsors',
                'children' => [
                    ['name' => 'All sponsors'],
                    ['name' => 'Become a sponsor'],
                ],
            ],
            [
                'name' => 'Community',
                'children' => [
                    ['name' => 'Code of Conduct'],
                    ['name' => 'Tourism'],
                    ['name' => 'Mailing List'],
                ],
            ],
            [
                'name' => 'FAQ',
                'children' => [],
            ],
        ];
    }
}
