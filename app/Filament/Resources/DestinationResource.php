<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Destination;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DestinationResource\Pages;
use App\Filament\Resources\DestinationResource\RelationManagers;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;

class DestinationResource extends Resource
{
    protected static ?string $model = Destination::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->helperText('Enter Destination Name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                TextInput::make('slug'),

                FileUpload::make('thumbnail')
                    ->helperText('Enter Thumbnail for Destination')
                    ->image()
                    ->required(),

                TextInput::make('highlight_text')
                    ->helperText('Enter Highlight Text for Destination')
                    ->required()
                    ->maxLength(255),

                TextInput::make('location')
                    ->helperText('Enter Location for Destination')
                    ->required()
                    ->maxLength(255),

                Select::make('is_active')
                    ->label('Is Destination Open?')
                    ->required()
                    ->options([true => 'Yes', false => 'No'])
                    ->native(false)
                    ->default(true),

                Textarea::make('description')
                    ->helperText('Enter Description for Destination')
                    ->required()
                    ->autosize(),

                Textarea::make('quote')
                    ->helperText('Enter Quote for Destination')
                    ->autosize(),

                Textarea::make('others')
                    ->autosize(),

                Repeater::make('photo')
                    ->relationship('destinationPhotos')
                    ->schema([
                        FileUpload::make('image')
                            ->helperText('Enter Photo for Destination')
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
                    ->tooltip(fn(Destination $record): string => $record->name),

                TextColumn::make('highlight_text'),

                TextColumn::make('location')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description'),

                TextColumn::make('quote'),

                IconColumn::make('is_active')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->Label('Is Destination Open?'),

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
            'index' => Pages\ListDestinations::route('/'),
            'create' => Pages\CreateDestination::route('/create'),
            'edit' => Pages\EditDestination::route('/{record}/edit'),
        ];
    }
}
