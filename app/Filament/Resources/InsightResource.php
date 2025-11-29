<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InsightResource\Pages;
use App\Models\Insight;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;

class InsightResource extends Resource
{
    protected static ?string $model = Insight::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';
    protected static ?string $navigationLabel = 'Insights';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $modelLabel = 'Insight';
    protected static ?string $pluralModelLabel = 'Insights';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('summary')
                ->rows(4)
                ->required(),

            Forms\Components\TextInput::make('author')
                ->required()
                ->maxLength(255),

            Forms\Components\DatePicker::make('published_at')
                ->label('Published Date')
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->directory('images/insights')
                ->image()
                ->label('Featured Image')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')
                ->sortable()
                ->searchable()
                ->limit(50),

            Tables\Columns\TextColumn::make('author')
                ->sortable()
                ->searchable(),

            Tables\Columns\ImageColumn::make('image')
                ->label('Image')
                ->square(),

            Tables\Columns\TextColumn::make('published_at')
                ->label('Published')
                ->date()
                ->sortable(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ])
        ->defaultSort('published_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInsights::route('/'),
            'create' => Pages\CreateInsight::route('/create'),
            'edit' => Pages\EditInsight::route('/{record}/edit'),
        ];
    }
}
