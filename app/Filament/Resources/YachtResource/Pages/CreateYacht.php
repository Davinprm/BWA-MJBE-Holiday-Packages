<?php

namespace App\Filament\Resources\YachtResource\Pages;

use App\Filament\Resources\YachtResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateYacht extends CreateRecord
{
    protected static string $resource = YachtResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
