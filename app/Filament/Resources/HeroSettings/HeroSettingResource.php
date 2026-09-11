<?php

namespace App\Filament\Resources\HeroSettings;

use App\Filament\Resources\HeroSettings\Pages\ManageHeroSettings;
use App\Models\HeroSetting;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroSettingResource extends Resource
{
    protected static ?string $model = HeroSetting::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';

    protected static ?string $slug = 'hero-settings';

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationLabel = 'Hero Section';

    protected static ?string $modelLabel = 'Hero Section';

    protected static ?string $pluralModelLabel = 'Hero Section';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('badge_title')
                    ->label('Badge title (company name)')
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('badge_location')
                    ->label('Badge location')
                    ->placeholder('Ernakulam, Kerala')
                    ->maxLength(255),
                TextInput::make('headline_1')
                    ->label('Headline part 1')
                    ->placeholder('HIGH-PRECISION')
                    ->maxLength(255),
                TextInput::make('headline_accent')
                    ->label('Headline accent (green part)')
                    ->placeholder('DIE MANUFACTURING')
                    ->maxLength(255),
                TextInput::make('headline_2')
                    ->label('Headline part 2')
                    ->placeholder('& CUSTOM TOOLING.')
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Description')
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('button_label')
                    ->label('Button label')
                    ->placeholder('Contact Technical Team')
                    ->maxLength(255),
                TextInput::make('quality_title')
                    ->label('Quality title')
                    ->placeholder('Strict Quality Control')
                    ->maxLength(255),
                TextInput::make('quality_subtitle')
                    ->label('Quality subtitle')
                    ->placeholder('100% CMM Accuracy Audit')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('badge_title')
                    ->label('Badge')
                    ->limit(40),
                TextColumn::make('headline_1')
                    ->label('Headline')
                    ->limit(40),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageHeroSettings::route('/'),
        ];
    }
}