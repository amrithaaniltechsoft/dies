<?php

namespace App\Filament\Resources\CtaContact;

use App\Filament\Resources\CtaContact\Pages\ManageCtaContact;
use App\Models\CtaContact;
use UnitEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CtaContactResource extends Resource
{
    protected static ?string $model = CtaContact::class;

    protected static ?string $slug = 'cta-contact';

    protected static ?int $navigationSort = 10;

    protected static UnitEnum|string|null $navigationGroup = 'CMS Content';

    protected static ?string $navigationLabel = 'Contact Section';

    protected static ?string $modelLabel = 'Contact Section';

    protected static ?string $pluralModelLabel = 'Contact Section';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('badge_label')
                    ->label('Badge label')
                    ->placeholder('Contact Information')
                    ->maxLength(255),
                TextInput::make('section_title')
                    ->label('Section title')
                    ->placeholder('Inquiries &')
                    ->maxLength(255),
                TextInput::make('section_title_accent')
                    ->label('Section title accent (highlighted part)')
                    ->placeholder('Design Consultations')
                    ->maxLength(255),
                Textarea::make('subtitle')
                    ->label('Subtitle')
                    ->rows(3)
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
            'index' => ManageCtaContact::route('/'),
        ];
    }
}
