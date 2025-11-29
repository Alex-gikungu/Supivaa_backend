<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApproachStepResource\Pages;
use App\Models\ApproachStep;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;

class ApproachStepResource extends Resource
{
    protected static ?string $model = ApproachStep::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';
    protected static ?string $navigationLabel = 'Approach Steps';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $modelLabel = 'Approach Step';
    protected static ?string $pluralModelLabel = 'Approach Steps';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('description')
                ->rows(4)
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->directory('images/approach')
                ->image()
                ->label('Step Image')
                ->required(),

            Forms\Components\TextInput::make('badge_color')
                ->label('Badge Color')
                ->maxLength(50),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('badge_color')
                ->label('Badge')
                ->sortable(),

            Tables\Columns\ImageColumn::make('image')
                ->label('Image')
                ->square(),

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
            'index' => Pages\ListApproachSteps::route('/'),
            'create' => Pages\CreateApproachStep::route('/create'),
            'edit' => Pages\EditApproachStep::route('/{record}/edit'),
        ];
    }
}
