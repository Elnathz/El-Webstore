<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\RichEditor\FileAttachmentProviders\SpatieMediaLibraryFileAttachmentProvider;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rules\Unique;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    SpatieMediaLibraryFileUpload::make('cover')
                        ->collection('cover'),
                    SpatieMediaLibraryFileUpload::make('gallery')
                        ->collection('gallery')
                        ->multiple(),
                    TextInput::make('name')
                        ->label("Product Name")
                        ->required()
                        ->maxLength(255)
                        ->live(debounce: 500)
                        ->afterStateUpdated(fn (\Filament\Schemas\Components\Utilities\Set $set, ?string $state) => $set('slug', \Illuminate\Support\Str::slug($state ?? ''))),
                    TextInput::make('sku')
                        ->label("SKU")
                        ->unique(ignoreRecord:true)
                        ->required()
                        ->maxLength(255),
                    TextInput::make('slug')
                        ->label("Slug")
                        ->unique(ignoreRecord:true)
                        ->required()
                        ->maxLength(255),
                    SpatieTagsInput::make('tags')
                        ->label('Collection')
                        ->type('collection'),
                    TextInput::make('stock')
                        ->numeric()
                        ->default(0),
                    TextInput::make('price')
                        ->numeric()
                        ->prefix('Rp')
                        ->required(),
                    TextInput::make('weight')
                        ->numeric()
                        ->suffix('gram')
                        ->default(0)
                ])
            ]);
    }
}
