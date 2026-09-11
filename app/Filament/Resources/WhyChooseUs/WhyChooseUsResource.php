<?php

namespace App\Filament\Resources\WhyChooseUs;

use App\Filament\Resources\WhyChooseUs\Pages\ManageWhyChooseUs;
use App\Models\WhyChooseUs;
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

class WhyChooseUsResource extends Resource
{
    protected static ?string $model = WhyChooseUs::class;

    protected static ?int $navigationSort = 6;

    protected static UnitEnum|string|null $navigationGroup = 'CMS Content';

    protected static ?string $navigationLabel = 'Why Choose Us';

    protected static ?string $modelLabel = 'Why Choose Us';

    protected static ?string $pluralModelLabel = 'Why Choose Us';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('badge_label')
                    ->label('Badge label')
                    ->placeholder('Why Choose Us')
                    ->maxLength(255),
                TextInput::make('section_title')
                    ->label('Section title')
                    ->placeholder('Why Choose')
                    ->maxLength(255),
                TextInput::make('section_title_accent')
                    ->label('Section title accent (highlighted part)')
                    ->placeholder('Master Form Dies?')
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
                                'quality' => 'Quality Check',
                                'tech' => 'Technology',
                                'award' => 'Award / Expertise',
                                'map' => 'Location',
                                'zap' => 'Speed / Energy',
                                'users' => 'Team / Clients',
                                'tools' => 'Custom Tooling',
                                'clock' => 'Fast Lead Times',
                            ])
                            ->default('quality')
                            ->required(),
                        TextInput::make('tag')
                            ->label('Tag')
                            ->placeholder('Quality Protocol')
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
            'index' => ManageWhyChooseUs::route('/'),
        ];
    }
}
