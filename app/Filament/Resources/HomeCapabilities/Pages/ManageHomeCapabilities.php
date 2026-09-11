<?php

namespace App\Filament\Resources\HomeCapabilities\Pages;

use App\Filament\Resources\HomeCapabilities\HomeCapabilityResource;
use Filament\Resources\Pages\ManageRecords;

class ManageHomeCapabilities extends ManageRecords
{
    protected static string $resource = HomeCapabilityResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}