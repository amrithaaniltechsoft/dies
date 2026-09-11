<?php

namespace App\Filament\Resources\AboutCoreExpertise;

use App\Filament\Resources\AboutCoreExpertise\Pages\ManageAboutCoreExpertise;
use App\Models\AboutCoreExpertise;
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

class AboutCoreExpertiseResource extends Resource
{
    protected static ?string $model = AboutCoreExpertise::class;

    protected static ?string $slug = 'core-expertise';

    protected static ?int $navigationSort = 9;

    protected static UnitEnum|string|null $navigationGroup = 'CMS Content';

    protected static ?string $navigationLabel = 'Core Expertise';

    protected static ?string $modelLabel = 'Core Expertise';

    protected static ?string $pluralModelLabel = 'Core Expertise';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('badge_label')
                    ->label('Badge label')
                    ->placeholder('Engineering Capabilities')
                    ->maxLength(255),
                TextInput::make('section_title')
                    ->label('Section title')
                    ->placeholder('Core')
                    ->maxLength(255),
                TextInput::make('section_title_accent')
                    ->label('Section title accent (highlighted part)')
                    ->placeholder('Expertise & Services')
                    ->maxLength(255),
                Textarea::make('subtitle')
                    ->label('Subtitle')
                    ->rows(3)
                    ->columnSpanFull(),
                Repeater::make('cards')
                    ->label('Cards')
                    ->defaultItems(4)
                    ->columnSpanFull()
                    ->reorderableWithDragAndDrop()
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                    ->schema([
                        Select::make('icon')
                            ->label('Icon')
                            ->options([
                                'hammer' => 'Hammer / Manufacturing',
                                'target' => 'Target / Accuracy',
                                'wrench' => 'Wrench / Machining',
                                'factory' => 'Factory / Facility',
                                'sparkles' => 'Sparkles',
                                'layers' => 'Layers / Design',
                                'shield' => 'Shield / Quality',
                                'quality' => 'Quality Check',
                                'map' => 'Location',
                                'cog' => 'Engineering',
                                'tools' => 'Tools / Tooling',
                            ])
                            ->nullable(),
                        TextInput::make('tag')
                            ->label('Tag')
                            ->placeholder('CAPABILITY 01')
                            ->maxLength(255),
                        TextInput::make('title')
                            ->label('Title')
                            ->maxLength(255),
                        Textarea::make('desc')
                            ->label('Description')
                            ->rows(3)
                            ->columnSpanFull(),
                        TextInput::make('footer')
                            ->label('Footer')
                            ->placeholder('ENGINEERING SPEC')
                            ->maxLength(255),
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
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageAboutCoreExpertise::route('/'),
        ];
    }
}
