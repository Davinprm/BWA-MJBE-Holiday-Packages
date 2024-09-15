<?php

namespace App\Filament\Resources\YachtBookingResource\Pages;

use App\Filament\Resources\YachtBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateYachtBooking extends CreateRecord
{
    protected static string $resource = YachtBookingResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
