<?php

namespace App\Filament\Resources\AboutCoreExpertise\Pages;

use App\Filament\Resources\AboutCoreExpertise\AboutCoreExpertiseResource;
use Filament\Resources\Pages\ManageRecords;

class ManageAboutCoreExpertise extends ManageRecords
{
    protected static string $resource = AboutCoreExpertiseResource::class;

    protected static ?string $slug = 'core-expertise';

    protected function getHeaderActions(): array
    {
        return [];
    }
}