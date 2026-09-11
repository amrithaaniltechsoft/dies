<?php

namespace App\Filament\Resources\HomeCapabilities;

use App\Filament\Resources\HomeCapabilities\Pages\ManageHomeCapabilities;
use App\Models\HomeCapability;
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

class HomeCapabilityResource extends Resource
{
    protected static ?string $model = HomeCapability::class;

    protected static ?int $navigationSort = 7;

    protected static UnitEnum|string|null $navigationGroup = 'CMS Content';

    protected static ?string $navigationLabel = 'Capabilities';

    protected static ?string $modelLabel = 'Capabilities';

    protected static ?string $pluralModelLabel = 'Capabilities';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('badge_label')
                    ->label('Badge label')
                    ->placeholder('Core Expertise')
                    ->maxLength(255),
                TextInput::make('section_title')
                    ->label('Section title')
                    ->placeholder('Our Engineering')
                    ->maxLength(255),
                TextInput::make('section_title_accent')
                    ->label('Section title accent (highlighted part)')
                    ->placeholder('& Manufacturing Capabilities')
                    ->maxLength(255),
                Repeater::make('cards')
                    ->label('Capability cards')
                    ->defaultItems(4)
                    ->columnSpanFull()
                    ->reorderableWithDragAndDrop()
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                    ->schema([
                        Select::make('icon')
                            ->label('Icon')
                            ->options([
                                'tools' => 'Tools / Manufacturing',
                                'layers' => 'Layers / Design',
                                'tech' => 'Technology',
                                'quality' => 'Quality Check',
                                'shield' => 'Trust / Shield',
                                'map' => 'Location',
                                'cog' => 'Engineering',
                            ])
                            ->default('tools')
                            ->required(),
                        TextInput::make('tag')
                            ->label('Tag')
                            ->placeholder('CORE CAPABILITY 01')
                            ->maxLength(255),
                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('desc')
                            ->label('Description')
                            ->rows(3)
                            ->columnSpanFull(),
                        Repeater::make('bullets')
                            ->label('Bullet points')
                            ->simple(TextInput::make('bullet'))
                            ->maxItems(6)
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
            'index' => ManageHomeCapabilities::route('/'),
        ];
    }
}
