<?php

namespace App\Enums;

enum MegaMenuType: string
{
    case FACE = 'face';
    case BODY = 'body';
    case HAIR = 'hair';
    case MAKEUP = 'makeup';

    public function label(): string
    {
        return match ($this) {
            self::FACE => 'Face',
            self::BODY => 'Body',
            self::HAIR => 'Hair',
            self::MAKEUP => 'Makeup',
        };
    }

    public function background(): string
    {
        return match ($this) {
            self::FACE => asset('assets/img/home1/megamenu2-face-bg.png'),
            self::BODY => asset('assets/img/home1/megamenu2-body-bg.png'),
            self::HAIR => asset('assets/img/home1/megamenu2-hair-bg.png'),
            self::MAKEUP => asset('assets/img/home1/megamenu2-bg1.png'),
        };
    }

    public function items(): array
    {
        return match ($this) {

            self::FACE => [
                'Cleanser',
                'Exfoliator',
                'Serum',
                'Face Oil',
                'Sunscreen',
                'Moisturizer',
                'Chemical Peel',
                'Toner',
                'Face Mask',
                'Eye Cream',
                'Face Wash',
                'Setting Spray',
                'Concealer',
                'Exfoliant',
                'Primer',
            ],

            self::BODY => [
                'Body Wash',
                'Body Scrub',
                'Body Lotion',
                'Body Butter',
                'Body Oil',
                'Body Mist',
                'Body Serum',
                'Body Gel',
                'Body Cleanser',
                'Body Polish',
                'Body Balm',
                'Bath Salts',
                'Shower Gel',
                'Exfoliating Gloves',
                'Cellulite Cream',
            ],

            self::HAIR => [
                'Shampoo',
                'Conditioner',
                'Hair Mask',
                'Hair Color',
                'Hair Oil',
                'Hair Rollers',
                'Hair Spray',
                'Hair Mousse',
                'Curling Iron',
                'Dry Shampoo',
                'Hair Detangler',
                'Hair Cream',
                'Hair Wax',
                'Hair Pomade',
                'Hair Texturizer',
            ],

            self::MAKEUP => [
                'Primer',
                'Foundation',
                'Concealer',
                'Powder',
                'Blush',
                'Bronzer',
                'Highlighter',
                'Contour',
                'Eyeshadow',
                'Eyeliner',
                'Mascara',
                'Lip Balm',
                'Lipstick',
                'Lip Gloss',
                'Setting Spray',
            ],
        };
    }
}