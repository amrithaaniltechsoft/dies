<?php

namespace App\Filament\Resources\HomeAbout;

use App\Filament\Resources\HomeAbout\Pages\ManageHomeAbout;
use App\Models\HomeAbout;
use UnitEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomeAboutResource extends Resource
{
    protected static ?string $model = HomeAbout::class;

    protected static ?string $slug = 'home-about';

    protected static ?int $navigationSort = 8;

    protected static UnitEnum|string|null $navigationGroup = 'CMS Content';

    protected static ?string $navigationLabel = 'About Section';

    protected static ?string $modelLabel = 'About Section';

    protected static ?string $pluralModelLabel = 'About Section';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('badge_label')
                    ->label('Badge label')
                    ->placeholder('About Master Form Dies')
                    ->maxLength(255),
                TextInput::make('section_title')
                    ->label('Section title')
                    ->placeholder('High-Precision Engineering &')
                    ->maxLength(255),
                TextInput::make('section_title_accent')
                    ->label('Section title accent (highlighted part)')
                    ->placeholder('Custom Tooling Solutions')
                    ->maxLength(255),
                TextInput::make('overview_label')
                    ->label('Specialization card label')
                    ->placeholder('SPECIALIZATION OVERVIEW')
                    ->maxLength(255)
                    ->columnSpanFull(),
                Textarea::make('overview_text')
                    ->label('Specialization card description')
                    ->rows(5)
                    ->columnSpanFull(),
                TextInput::make('overview_footer')
                    ->label('Specialization card footer')
                    ->placeholder('Mannathoor, Ernakulam, Kerala â€¢ Industrial Tooling & Die Manufacturing')
                    ->maxLength(255)
                    ->columnSpanFull(),
                FileUpload::make('overview_image')
                    ->label('Specialization card background image')
                    ->image()
                    ->disk('public')
                    ->directory('about-home')
                    ->columnSpanFull(),
                Repeater::make('cards')
                    ->label('Cards')
                    ->defaultItems(4)
                    ->columnSpanFull()
                    ->reorderableWithDragAndDrop()
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                    ->schema([
                        Select::make('icon')
                            ->label('Icon (leave empty to hide)')
                            ->options([
                                'shield' => 'Shield / Quality',
                                'target' => 'Target / Accuracy',
                                'factory' => 'Factory / Facility',
                                'sparkles' => 'Sparkles',
                                'tools' => 'Tools / Manufacturing',
                                'layers' => 'Layers / Design',
                                'quality' => 'Quality Check',
                                'map' => 'Location',
                                'cog' => 'Engineering',
                            ])
                            ->nullable(),
                        TextInput::make('title')
                            ->label('Title')
                            ->maxLength(255),
                        Textarea::make('desc')
                            ->label('Description')
                            ->rows(3)
                            ->columnSpanFull(),
                        TextInput::make('footer')
                            ->label('Footer')
                            ->placeholder('QUALITY ASSURANCE PROTOCOL')
                            ->maxLength(255),
                    ]),
                Repeater::make('carousel_images')
                    ->label('Machine carousel images')
                    ->defaultItems(6)
                    ->columnSpanFull()
                    ->reorderableWithDragAndDrop()
                    ->itemLabel(fn (array $state): ?string => $state['alt'] ?? null)
                    ->schema([
                        FileUpload::make('image')
                            ->label('Machine image')
                            ->image()
                            ->disk('public')
                            ->directory('machines'),
                        TextInput::make('alt')
                            ->label('Alt text')
                            ->maxLength(255),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
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
            'index' => ManageHomeAbout::route('/'),
        ];
    }
}
