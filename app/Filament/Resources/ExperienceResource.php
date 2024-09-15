<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Experience;
use Filament\Tables\Table;
use App\Models\Destination;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->helperText('Enter Experience Name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                TextInput::make('slug'),

                FileUpload::make('thumbnail')
                    ->helperText('Enter Thumbnail for Experience')
                    ->image()
                    ->required(),

                TextInput::make('highlight_text')
                    ->helperText('Enter Highlight Text for Experience')
                    ->required()
                    ->maxLength(255),

                Select::make('is_avalable')
                    ->label('Is Experience Available?')
                    ->required()
                    ->options([true => 'Yes', false => 'No'])
                    ->native(false)
                    ->default(true),

                Textarea::make('description')
                    ->helperText('Enter Description for Experience')
                    ->required()
                    ->autosize(),

                Textarea::make('quote')
                    ->helperText('Enter Quote for Experience')
                    ->autosize(),

                Textarea::make('others')
                    ->autosize(),

                Repeater::make('photo')
                    ->relationship('experiencePhotos')
                    ->schema([
                        FileUpload::make('image')
                            ->helperText('Enter Photo for Experience')
                            ->image(),
                    ]),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->tooltip(fn(Experience $record): string => $record->name),

                TextColumn::make('highlight_text'),

                TextColumn::make('description'),

                TextColumn::make('quote'),

                IconColumn::make('is_available')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->Label('Is Experience Available?'),
                
                TextColumn::make('others'),
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
