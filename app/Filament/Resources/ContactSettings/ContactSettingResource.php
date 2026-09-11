<?php

namespace App\Filament\Resources\ContactSettings;

use App\Filament\Resources\ContactSettings\Pages\ManageContactSettings;
use App\Models\ContactSetting;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactSettingResource extends Resource
{
    protected static ?string $model = ContactSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhone;

    protected static ?int $navigationSort = 4;

    public static function getNavigationLabel(): string
    {
        return 'Contact';
    }

    public static function getModelLabel(): string
    {
        return 'Contact';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Contact';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('company_name')
                    ->label('Company name')
                    ->maxLength(255),
                TextInput::make('contact1')
                    ->label('Contact 1')
                    ->maxLength(255),
                TextInput::make('contact2')
                    ->label('Contact 2')
                    ->maxLength(255),
                TextInput::make('whatsapp')
                    ->label('WhatsApp')
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->maxLength(255),
                Textarea::make('address')
                    ->label('Address')
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('hours')
                    ->label('Operating hours')
                    ->placeholder('Mon - Sat: 8:30 AM - 6:00 PM')
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('contact1')
                    ->label('Contact 1')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('whatsapp')
                    ->label('WhatsApp')
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageContactSettings::route('/'),
        ];
    }
}
