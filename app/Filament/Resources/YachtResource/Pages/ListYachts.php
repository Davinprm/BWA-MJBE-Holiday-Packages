<?php

namespace App\Filament\Resources\YachtResource\Pages;

use App\Filament\Resources\YachtResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYachts extends ListRecords
{
    protected static string $resource = YachtResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
