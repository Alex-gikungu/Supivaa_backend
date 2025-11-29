<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhatWeDoSectionResource\Pages;
use App\Models\WhatWeDoSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class WhatWeDoSectionResource extends Resource
{
    protected static ?string $model = WhatWeDoSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('whatwedo_title')->required(),
                Textarea::make('whatwedo_description')->rows(4)->required(),
                TextInput::make('whatwedo_button_1'),
                TextInput::make('whatwedo_button_2'),
                FileUpload::make('whatwedo_image')
                    ->directory('images')
                    ->image()
                    ->nullable(),   // ✅ allow empty

                Repeater::make('approach_steps')
                    ->schema([
                        TextInput::make('number'),
                        TextInput::make('title'),
                        Textarea::make('description')->rows(2),
                    ])
                    ->collapsible(),

                TextInput::make('different_title'),
                Repeater::make('different_points')
                    ->schema([
                        TextInput::make('title'),
                        Textarea::make('description')->rows(2),
                    ])
                    ->collapsible(),
                FileUpload::make('different_image')
                    ->directory('images')
                    ->image()
                    ->nullable(),   // ✅ allow empty

                TextInput::make('serve_title'),
                Repeater::make('serve_cards')
                    ->schema([
                        FileUpload::make('icon')
                            ->directory('images')
                            ->image()
                            ->nullable(),   // ✅ allow empty
                        TextInput::make('title'),
                        Textarea::make('description')->rows(2),
                        TextInput::make('link'),
                    ])
                    ->collapsible(),

                TextInput::make('ready_title'),
                Textarea::make('ready_subtext')->rows(3),
                TextInput::make('ready_button_1'),
                TextInput::make('ready_button_2'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('whatwedo_title')->limit(50),
                Tables\Columns\TextColumn::make('serve_title')->limit(50),
                Tables\Columns\TextColumn::make('ready_title')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWhatWeDoSections::route('/'),
            'create' => Pages\CreateWhatWeDoSection::route('/create'),
            'edit' => Pages\EditWhatWeDoSection::route('/{record}/edit'),
        ];
    }
}
