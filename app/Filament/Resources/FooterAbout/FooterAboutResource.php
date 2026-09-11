<?php

namespace App\Filament\Resources\FooterAbout;

use App\Filament\Resources\FooterAbout\Pages\ManageFooterAbout;
use App\Models\FooterAbout;
use UnitEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FooterAboutResource extends Resource
{
    protected static ?string $model = FooterAbout::class;

    protected static ?string $slug = 'footer-about';

    protected static ?int $navigationSort = 11;

    protected static UnitEnum|string|null $navigationGroup = 'CMS Content';

    protected static ?string $navigationLabel = 'Footer About';

    protected static ?string $modelLabel = 'Footer About';

    protected static ?string $pluralModelLabel = 'Footer About';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('description')
                    ->label('About description')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('description')
                    ->label('Description')
                    ->limit(80),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageFooterAbout::route('/'),
        ];
    }
}
