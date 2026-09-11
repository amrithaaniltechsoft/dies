<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-cube';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('price')
                    ->nullable()
                    ->numeric()
                    ->minValue(0),
                Textarea::make('description')
                    ->columnSpanFull(),
                Repeater::make('benefits')
                    ->label('Manufacturing Benefits')
                    ->relationship()
                    ->afterStateHydrated(function (Repeater $component): void {
                        if ($component->getRawState()) {
                            return;
                        }

                        $key = $component->generateUuid();

                        $items = $component->getRawState() ?? [];

                        if ($key) {
                            $items[$key] = [];
                        } else {
                            $items[] = [];
                        }

                        $component->rawState($items);

                        $component->getChildSchema($key ?? array_key_last($items))->fill();
                    })
                    ->simple(Textarea::make('benefit'))
                    ->defaultItems(1)
                    ->addable(false)
                    ->orderColumn('sort')
                    ->extraItemActions([
                        Action::make('addBenefit')
                            ->icon('heroicon-m-plus')
                            ->tooltip('Add benefit')
                            ->action(function (array $arguments, Repeater $component): void {
                                $currentKey = $arguments['item'] ?? null;

                                $newKey = $component->generateUuid();

                                $items = [];

                                foreach ($component->getRawState() ?? [] as $key => $item) {
                                    $items[$key] = $item;

                                    if ($key === $currentKey) {
                                        if ($newKey) {
                                            $items[$newKey] = [];
                                        } else {
                                            $items[] = [];

                                            $newKey = array_key_last($items);
                                        }
                                    }
                                }

                                $component->rawState($items);

                                $component->getChildSchema($newKey)->fill();

                                $component->collapsed(false, shouldMakeComponentCollapsible: false);

                                $component->callAfterStateUpdated();

                                $component->partiallyRender();
                            }),
                    ])
                    ->collapsed(false)
                    ->columnSpanFull(),
                TextInput::make('meta_title')
                    ->label('Meta title')
                    ->maxLength(255),
                TextInput::make('meta_keywords')
                    ->label('Meta keywords')
                    ->placeholder('product, category, keyword')
                    ->maxLength(255),
                Textarea::make('meta_description')
                    ->label('Meta description')
                    ->maxLength(160)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('products'),
                FileUpload::make('images')
                    ->label('Gallery images')
                    ->multiple()
                    ->image()
                    ->disk('public')
                    ->directory('products/gallery'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image')
                    ->disk('public')
                    ->square(),
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

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
