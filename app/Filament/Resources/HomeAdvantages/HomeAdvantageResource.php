<?php

namespace App\Filament\Resources\HomeAdvantages;

use App\Filament\Resources\HomeAdvantages\Pages\ManageHomeAdvantages;
use App\Models\HomeAdvantage;
use UnitEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomeAdvantageResource extends Resource
{
    protected static ?string $model = HomeAdvantage::class;

    protected static ?int $navigationSort = 5;

    protected static UnitEnum|string|null $navigationGroup = 'CMS Content';

    protected static ?string $navigationLabel = 'Home Advantages';

    protected static ?string $modelLabel = 'Home Advantages';

    protected static ?string $pluralModelLabel = 'Home Advantages';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('badge_label')
                    ->label('Badge label')
                    ->placeholder('Industrial Advantages')
                    ->maxLength(255),
                TextInput::make('section_title')
                    ->label('Section title')
                    ->placeholder('Built for High-Stakes')
                    ->maxLength(255),
                TextInput::make('section_title_accent')
                    ->label('Section title accent (highlighted part)')
                    ->placeholder('Manufacturing Demands')
                    ->maxLength(255),
                TextInput::make('footer_label')
                    ->label('Footer label')
                    ->placeholder('PRECISION SPECIFIED')
                    ->maxLength(255),
                Repeater::make('cards')
                    ->label('Advantage cards')
                    ->defaultItems(4)
                    ->columnSpanFull()
                    ->reorderableWithDragAndDrop()
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                    ->schema([
                        Select::make('icon')
                            ->label('Icon')
                            ->options([
                                'quality' => 'Quality Check',
                                'cpu' => 'Technology',
                                'shield' => 'Trust / Shield',
                                'map' => 'Location',
                                'tools' => 'Custom Tooling',
                                'clock' => 'Fast Lead Times',
                            ])
                            ->default('quality')
                            ->required(),
                        TextInput::make('tag')
                            ->label('Tag')
                            ->placeholder('INFRASTRUCTURE 01')
                            ->maxLength(255),
                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('desc')
                            ->label('Description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('badge_label')
                    ->label('Badge')
                    ->searchable(),
                TextColumn::make('section_title')
                    ->label('Section title')
                    ->searchable(),
                TextColumn::make('section_title_accent')
                    ->label('Accent')
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageHomeAdvantages::route('/'),
        ];
    }
}
