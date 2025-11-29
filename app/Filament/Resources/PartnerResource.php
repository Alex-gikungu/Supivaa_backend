<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Models\Partner;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $label = 'Partner';
    protected static ?string $pluralLabel = 'Partners';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required(),
            FileUpload::make('image')
                ->directory('images')
                ->image()
                ->required(),
            TextInput::make('alt_text')->required(),
            TextInput::make('link')->url()->nullable(),
            Select::make('sector')
                ->options([
                    'Agriculture' => 'Agriculture',
                    'Healthcare' => 'Healthcare',
                    'Financial Institutions' => 'Financial Institutions',
                ])
                ->nullable(),
            Textarea::make('description')->rows(4)->nullable(),
            Toggle::make('is_logo')->label('Show as Logo'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->searchable()->sortable(),
            TextColumn::make('sector')->sortable(),
            IconColumn::make('is_logo')->boolean()->label('Logo'),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}
