<?php

namespace App\Filament\Resources\HomeAdvantages\Pages;

use App\Filament\Resources\HomeAdvantages\HomeAdvantageResource;
use Filament\Resources\Pages\ManageRecords;

class ManageHomeAdvantages extends ManageRecords
{
    protected static string $resource = HomeAdvantageResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}