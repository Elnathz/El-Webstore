<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\SpatieTagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make("cover")
                    ->collection("cover"),
                SpatieMediaLibraryImageColumn::make("gallery")
                    ->collection("gallery"),
                TextColumn::make("name")
                    ->searchable(),
                TextColumn::make("sku")
                    ->searchable(),
                TextColumn::make("price")
                    ->money("Rp "),
                TextColumn::make("stock")
                    ->badge(fn($state) => $state > 0 ? 'success' : 'danger'),
                SpatieTagsColumn::make("tags")
                    ->type("collection"),
                TextColumn::make("weight")
                    ->icon("heroicon-o-scale")
                    ->suffix(" gram")
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
