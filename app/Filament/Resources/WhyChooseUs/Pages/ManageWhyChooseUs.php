<?php

namespace App\Filament\Resources\WhyChooseUs\Pages;

use App\Filament\Resources\WhyChooseUs\WhyChooseUsResource;
use Filament\Resources\Pages\ManageRecords;

class ManageWhyChooseUs extends ManageRecords
{
    protected static string $resource = WhyChooseUsResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}