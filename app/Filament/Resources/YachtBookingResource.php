<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YachtBookingResource\Pages;
use App\Filament\Resources\YachtBookingResource\RelationManagers;
use App\Models\YachtBooking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YachtBookingResource extends Resource
{
    protected static ?string $model = YachtBooking::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListYachtBookings::route('/'),
            'create' => Pages\CreateYachtBooking::route('/create'),
            'edit' => Pages\EditYachtBooking::route('/{record}/edit'),
        ];
    }
}
