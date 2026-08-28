<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoSettingResource\Pages;
use App\Models\SeoSetting;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SeoSettingResource extends Resource
{
    protected static ?string $model = SeoSetting::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-magnifying-glass';

    protected static ?int $navigationSort = 4;

    public static function getNavigationLabel(): string
    {
        return 'SEO';
    }

    public static function getModelLabel(): string
    {
        return 'SEO';
    }

    public static function getPluralModelLabel(): string
    {
        return 'SEO';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('page')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                TextInput::make('meta_title')
                    ->label('Meta title')
                    ->maxLength(255),
                Textarea::make('meta_description')
                    ->label('Meta description')
                    ->maxLength(160)
                    ->columnSpanFull(),
                TextInput::make('meta_keywords')
                    ->label('Meta keywords')
                    ->placeholder('product, category, keyword')
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('meta_title')
                    ->label('Meta title')
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSeoSettings::route('/'),
            'create' => Pages\CreateSeoSetting::route('/create'),
            'edit' => Pages\EditSeoSetting::route('/{record}/edit'),
        ];
    }
}
