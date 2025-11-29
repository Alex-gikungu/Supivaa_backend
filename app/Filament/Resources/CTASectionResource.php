<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CTASectionResource\Pages;
use App\Models\CTASection;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;

class CTASectionResource extends Resource
{
    protected static ?string $model = CTASection::class;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';
    protected static ?string $navigationLabel = 'CTA Sections';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $modelLabel = 'CTA Section';
    protected static ?string $pluralModelLabel = 'CTA Sections';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('headline')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('subtext')
                ->rows(3)
                ->required(),

            Forms\Components\TextInput::make('button_text')
                ->required()
                ->maxLength(100),

            Forms\Components\TextInput::make('button_url')
                ->required()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('headline')
                ->sortable()
                ->searchable()
                ->limit(50),

            Tables\Columns\TextColumn::make('button_text')
                ->label('Button')
                ->sortable(),

            Tables\Columns\TextColumn::make('button_url')
                ->label('URL')
                ->limit(40),

            Tables\Columns\TextColumn::make('updated_at')
                ->label('Updated')
                ->dateTime()
                ->sortable(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ])
        ->defaultSort('updated_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCTASections::route('/'),
            'create' => Pages\CreateCTASection::route('/create'),
            'edit' => Pages\EditCTASection::route('/{record}/edit'),
        ];
    }
}
