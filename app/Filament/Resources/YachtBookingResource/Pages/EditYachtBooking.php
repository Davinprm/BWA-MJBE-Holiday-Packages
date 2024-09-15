<?php

namespace App\Filament\Resources\YachtBookingResource\Pages;

use App\Filament\Resources\YachtBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYachtBooking extends EditRecord
{
    protected static string $resource = YachtBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
