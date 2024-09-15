<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Yacht;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ToggleButtons;
use App\Filament\Resources\YachtResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\YachtResource\RelationManagers;
use BladeUI\Icons\Components\Icon;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\IconColumn;
use PhpParser\Node\Stmt\Label;

class YachtResource extends Resource
{
    protected static ?string $model = Yacht::class;

    protected static ?string $navigationIcon = 'heroicon-o-lifebuoy';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->helperText('Enter Yacht Name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                TextInput::make('slug'),

                FileUpload::make('thumbnail')
                    ->helperText('Enter Yacht Thumbnail')
                    ->image()
                    ->required(),

                TextInput::make('model')
                    ->helperText('Enter Yacht Model')
                    ->required()
                    ->maxLength(255),

                DatePicker::make('built_date')
                    ->helperText('Enter Yacht Built Date')
                    ->required()
                    ->native(false),

                TextInput::make('capacity')
                    ->helperText('Enter Yacht Capacity')
                    ->required()
                    ->numeric()
                    ->minValue(0),

                TextInput::make('cabins')
                    ->helperText('Enter Yacht Cabins')
                    ->required()
                    ->numeric()
                    ->minValue(0),

                Textarea::make('location')
                    ->helperText('Enter Yacht Location')
                    ->required()
                    ->autosize(),

                Textarea::make('description')
                    ->helperText('Enter Yacht Description')
                    ->required()
                    ->autosize(),

                TextInput::make('price')
                    ->helperText('Enter Yacht Price')
                    ->required()
                    ->numeric()
                    ->prefixIcon('heroicon-o-currency-dollar')
                    ->minValue(0),

                Select::make('is_active')
                    ->label('Is yacht active?')
                    ->required()
                    ->options([true => 'Yes', false => 'No'])
                    ->native(false)
                    ->default(true),

                Select::make('is_full_booked')
                    ->label('Is yacht full booked?')
                    ->required()
                    ->options([true => 'Available', false => 'Not Available'])
                    ->native(false)
                    ->default(true),

                TextInput::make('crew')
                    ->helperText('Enter Yacht Crew')
                    ->required()
                    ->numeric()
                    ->prefixIcon('heroicon-o-user')
                    ->minValue(0),

                TextInput::make('length')
                    ->helperText('Enter Yacht Length')
                    ->required()
                    ->maxLength(255),

                Textarea::make('boat_builder_and_designer')
                    ->helperText('Enter Boat Builder and Designer')
                    ->required()
                    ->autosize(),

                Textarea::make('superstructure')
                    ->helperText('Enter Yacht Superstructue')
                    ->required()
                    ->autosize(),

                Textarea::make('machinery_and_electronics')
                    ->helperText('Enter Yacht Machinery')
                    ->required()
                    ->autosize(),

                TextInput::make('speed')
                    ->helperText('Enter Yacht Speed')
                    ->required()
                    ->maxLength(255),

                Textarea::make('dive_equipment')
                    ->helperText('Enter Yacht Dive Equipment')
                    ->required()
                    ->autosize(),

                Textarea::make('tenders')
                    ->helperText('Enter Yacht Tenders')
                    ->required()
                    ->autosize(),

                Textarea::make('navigation')
                    ->helperText('Enter Yacht Navigation')
                    ->required()
                    ->autosize(),

                Textarea::make('safety_equipment_and_features')
                    ->helperText('Enter Yacht Safety Equipment and Features')
                    ->required()
                    ->autosize(),

                Repeater::make('photo')
                    ->relationship('yachtPhotos')
                    ->schema([
                        FileUpload::make('image')
                            ->helperText('Enter Multiple Yacht Photo')
                            ->image(),

                        FileUpload::make('cabin')
                            ->helperText('Enter Yacht Cabin Photo')
                            ->image(),

                        FileUpload::make('blueprint')
                            ->helperText('Enter Yacht Blueprint')
                            ->image(),
                    ]),

                Repeater::make('facilities')
                    ->relationship('yachtFacilities')
                    ->schema([
                        Textarea::make('name')
                            ->helperText('Enter Facility Name')
                            ->required()
                            ->autosize(),
                    ]),

                Textarea::make('water_toys')
                    ->helperText("Enter Yacht's Water Toys")
                    ->required()
                    ->autosize(),


                Textarea::make('others')
                    ->required()
                    ->autosize(),
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
                    ->tooltip(fn(Yacht $record): string => $record->name),

                TextColumn::make('model')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('built_date')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('capacity')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('cabins')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('location')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description'),

                TextColumn::make('price')
                    ->searchable()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->Label('Is Yacht Active?'),

                IconColumn::make('is_full_booked')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->Label('Available for Booked?'),

                TextColumn::make('crew')
                    ->sortable(),

                TextColumn::make('length')
                    ->sortable(),

                TextColumn::make('boat_builder_and_designer')
                    ->searchable(),

                TextColumn::make('superstructure')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('machinery_and_electronics')
                    ->searchable(),

                TextColumn::make('speed')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('dive_equipment')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('tenders')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('navigation')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('safety_equipment_and_features'),

                TextColumn::make('water_toys')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('others')
                    ->searchable()
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
            'index' => Pages\ListYachts::route('/'),
            'create' => Pages\CreateYacht::route('/create'),
            'edit' => Pages\EditYacht::route('/{record}/edit'),
        ];
    }
}
