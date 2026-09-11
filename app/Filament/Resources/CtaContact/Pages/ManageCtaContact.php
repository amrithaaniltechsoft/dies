<?php

namespace App\Filament\Resources\CtaContact\Pages;

use App\Filament\Resources\CtaContact\CtaContactResource;
use Filament\Resources\Pages\ManageRecords;

class ManageCtaContact extends ManageRecords
{
    protected static string $resource = CtaContactResource::class;

    protected static ?string $slug = 'cta-contact';

    protected function getHeaderActions(): array
    {
        return [];
    }
}