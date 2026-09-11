<?php

namespace App\Filament\Resources\FooterAbout\Pages;

use App\Filament\Resources\FooterAbout\FooterAboutResource;
use Filament\Resources\Pages\ManageRecords;

class ManageFooterAbout extends ManageRecords
{
    protected static string $resource = FooterAboutResource::class;

    protected static ?string $slug = 'footer-about';

    protected function getHeaderActions(): array
    {
        return [];
    }
}