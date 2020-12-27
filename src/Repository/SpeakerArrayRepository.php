<?php

declare(strict_types=1);

namespace App\Repository;

final class SpeakerArrayRepository implements SpeakerRepository
{
    public function findFeatured(): array
    {
        return [
            [
                'name' => 'Jen Witkowski and Jared Ponchot',
                'description' => 'Jen Witkowski and Jerad Ponchot are the designers for the new front-end theme that will go into Drupal 9 core (Olivero).',
                'image' => 'picture-4018-1578948278.png',
            ],
            [
                'name' => 'April Sides',
                'description' => 'April is a senior developer at Lullabot and has worked doing data migration to Georgia.gov\'s network of Drupal 8 sites.',
                'image' => 'picture-3735-1543975480.jpg',
            ],
            [
                'name' => null,
                'description' => null,
                'image' => 'picture-3987-1573406900.jpg',
            ],
        ];
    }
}
