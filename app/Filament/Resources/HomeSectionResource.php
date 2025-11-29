<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeSectionResource\Pages;
use App\Models\HomeSection;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Tables\Table;
use Filament\Tables;

class HomeSectionResource extends Resource
{
    protected static ?string $model = HomeSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Home Section';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $modelLabel = 'Home Section';
    protected static ?string $pluralModelLabel = 'Home Sections';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Hero')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('hero_title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('hero_subtext')
                        ->rows(3)
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('hero_button_1')
                        ->label('Primary Button')
                        ->maxLength(100),
                    Forms\Components\TextInput::make('hero_button_2')
                        ->label('Secondary Button')
                        ->maxLength(100),
                ]),

            Forms\Components\Section::make('Challenge')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('challenge_heading')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('challenge_paragraph')
                        ->rows(4)
                        ->required()
                        ->columnSpanFull(),
                ]),

            Forms\Components\Section::make('Stats')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('stat_1_value')
                        ->label('Stat 1 Value')
                        ->maxLength(50),
                    Forms\Components\TextInput::make('stat_1_text')
                        ->label('Stat 1 Text')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('stat_2_value')
                        ->label('Stat 2 Value')
                        ->maxLength(50),
                    Forms\Components\TextInput::make('stat_2_text')
                        ->label('Stat 2 Text')
                        ->maxLength(255),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('hero_title')
                ->sortable()
                ->searchable()
                ->limit(50),

            Tables\Columns\TextColumn::make('challenge_heading')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('updated_at')
                ->label('Updated')
                ->dateTime()
                ->sortable(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([])
        ->defaultSort('updated_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeSections::route('/'),
            'edit' => Pages\EditHomeSection::route('/{record}/edit'),
        ];
    }
}
