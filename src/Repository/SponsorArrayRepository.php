<?php

declare(strict_types=1);

namespace App\Repository;

use App\Collection\SponsorCollection;

final class SponsorArrayRepository implements SponsorRepository
{
    private const TYPE_PLATINUM = 'platinum';
    private const TYPE_GOLD = 'gold';
    private const TYPE_SILVER = 'silver';
    private const TYPE_BRONZE = 'bronze';
    private const TYPE_IN_KIND = 'in_kind';

    private const SPONSORS = [
        [
            'name' => 'DDEV',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/ddev1000.png',
            'type' => self::TYPE_PLATINUM,
        ],
        [
            'name' => 'Acquia',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/Acquia_no_tagline.png',
            'type' => self::TYPE_GOLD,
        ],
        [
            'name' => 'Palantir.net',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/palantir-logo_0.png',
            'type' => self::TYPE_GOLD,
        ],
        [
            'name' => 'Drupal Contractors, by esteemed',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/dcont-logo-v1-stacked-black-01.png',
            'type' => self::TYPE_GOLD,
        ],
        [
            'name' => 'Lullabot',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/lullabot.jpg',
            'type' => self::TYPE_GOLD,
        ],
        [
            'name' => 'Florida Realtors Association',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/florida-realtors-logo.png',
            'type' => self::TYPE_SILVER,
        ],
        [
            'name' => 'DrupalEasy',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/DrupalEasy%20CMYK%20Layered_0.png',
            'type' => self::TYPE_SILVER,
        ],
        [
            'name' => 'Specbee',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/SpecbeeLogo-800x800.png',
            'type' => self::TYPE_SILVER,
        ],
        [
            'name' => 'devPanel',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/logo_devPanel_800x800_3.png',
            'type' => self::TYPE_BRONZE,
        ],
        [
            'name' => 'Promet Source',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/Promet_Logo_Master-04.png',
            'type' => self::TYPE_BRONZE,
        ],
        [
            'name' => 'Hot Sauce',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/hotsauce_logo.png',
            'type' => self::TYPE_BRONZE,
        ],
        [
            'name' => 'CLoud NYNE Design',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/CLoud-NYNE-Design.jpg',
            'type' => self::TYPE_BRONZE,
        ],
        [
            'name' => 'Bluehorn Digital',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/Bluehorn%20Digital%20Logo%20-%204C.png',
            'type' => self::TYPE_BRONZE,
        ],
        [
            'name' => 'Pantheon',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/newlogo-webops_New%20logo%20-black%20fist%20tagline.png',
            'type' => self::TYPE_BRONZE,
        ],
        [
            'name' => 'DesignHammer',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/DesignHammer%20%281%29.png',
            'type' => self::TYPE_BRONZE,
        ],
        [
            'name' => 'The Weekly Drop',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/twd-square-logo.png',
            'type' => self::TYPE_IN_KIND,
        ],
        [
            'name' => 'Kanopi Studios',
            'logo_url' => 'https://www.fldrupal.camp/sites/default/files/styles/medium/public/Kanopi_Logo_Horiz_RGB.png',
            'type' => self::TYPE_IN_KIND,
        ]
    ];

    public function findByType(string $type): array
    {
        $sponsors = new SponsorCollection(self::SPONSORS);

        return $sponsors->byType($type)->toArray();
    }
}
