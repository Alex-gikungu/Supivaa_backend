<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutSectionResource\Pages;
use App\Models\AboutSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutSectionResource extends Resource
{
    protected static ?string $model = AboutSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = 'Who We Are';
    protected static ?string $modelLabel = 'About Section';
    protected static ?string $pluralModelLabel = 'About Sections';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Header')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('subtitle')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description')
                        ->rows(6)
                        ->required()
                        ->columnSpanFull(),
                ]),

            Forms\Components\Section::make('Main Image')
                ->columns(2)
                ->schema([
                    Forms\Components\FileUpload::make('image')
                        ->directory('images')
                        ->image()
                        ->label('Main Image'),
                    Forms\Components\TextInput::make('alt_text')
                        ->label('Alt text')
                        ->maxLength(255),
                ]),

            Forms\Components\Section::make('Mission')
                ->columns(2)
                ->schema([
                    Forms\Components\Textarea::make('mission')->rows(5),
                    Forms\Components\FileUpload::make('mission_image')
                        ->directory('images')
                        ->image()
                        ->label('Mission Image'),
                    Forms\Components\TextInput::make('mission_alt')
                        ->label('Mission alt')
                        ->maxLength(255),
                ]),

            Forms\Components\Section::make('Vision')
                ->columns(2)
                ->schema([
                    Forms\Components\Textarea::make('vision')->rows(5),
                    Forms\Components\FileUpload::make('vision_image')
                        ->directory('images')
                        ->image()
                        ->label('Vision Image'),
                    Forms\Components\TextInput::make('vision_alt')
                        ->label('Vision alt')
                        ->maxLength(255),
                ]),

            Forms\Components\Section::make('Story')
                ->columns(2)
                ->schema([
                    Forms\Components\Textarea::make('story')
                        ->rows(8)
                        ->helperText("Use \\n for paragraph breaks if needed."),
                    Forms\Components\FileUpload::make('story_image')
                        ->directory('images')
                        ->image()
                        ->label('Story Image'),
                    Forms\Components\TextInput::make('story_alt')
                        ->label('Story alt')
                        ->maxLength(255),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('subtitle')
                ->limit(40)
                ->searchable(),
            Tables\Columns\ImageColumn::make('image')
                ->label('Main Image')
                ->square(),
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
            'index' => Pages\ListAboutSections::route('/'),
            'edit' => Pages\EditAboutSection::route('/{record}/edit'),
        ];
    }
}
