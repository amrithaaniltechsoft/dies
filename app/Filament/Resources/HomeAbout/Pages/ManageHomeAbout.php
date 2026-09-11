<?php

namespace App\Filament\Resources\HomeAbout\Pages;

use App\Filament\Resources\HomeAbout\HomeAboutResource;
use Filament\Resources\Pages\ManageRecords;

class ManageHomeAbout extends ManageRecords
{
    protected static string $resource = HomeAboutResource::class;

    protected static ?string $slug = 'home-about';

    protected function getHeaderActions(): array
    {
        return [];
    }
}