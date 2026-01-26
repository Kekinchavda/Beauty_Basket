<?php

namespace App\Enums;

enum CategoryMenuType: string
{
    case HOME = 'home';
    case OUR_BRANDS = 'our_brands';
    case SKIN_CARE = 'skin_care';
    case PERSONAL_CARE = 'personal_care';
    case MAKEUP = 'makeup';
    case FRAGRANCE = 'fragrance';
    case MENS_COLLECTION = 'mens_collection';
    
    public static function menu(): array
    {
        return self::cases();
    }

    public function label(): string
    {
        return match ($this) {
            self::HOME => 'Home',
            self::OUR_BRANDS => 'Our Brands',
            self::SKIN_CARE => 'Skin Care',
            self::PERSONAL_CARE => 'Personal Care',
            self::MAKEUP => 'Makeup',
            self::FRAGRANCE => 'Fragrance',
            self::MENS_COLLECTION => 'Mens Collections',
        };
    }

    public function route(): ?string
    {
        return match ($this) {
            self::HOME => route('index'),
            self::OUR_BRANDS => route('our.brand'),
            self::SKIN_CARE => route('shop.list'),
            default => null, // dropdown menus
        };
    }

    public function children(): array
    {
        return match ($this) {
            self::PERSONAL_CARE => [
                'Body Treatments',
                'Face Care' => [
                    'Face Oil',
                    'Sunscreen',
                    'Face Mask',
                ],
            ],

            self::MENS_COLLECTION => [
                'Hair Gel',
                'Face Wash',
            ],

            default => [],
        };
    }

    public function hasChildren(): bool
    {
        return !empty($this->children());
    }
}
