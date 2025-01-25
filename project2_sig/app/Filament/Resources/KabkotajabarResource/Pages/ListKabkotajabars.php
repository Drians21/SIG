<?php

namespace App\Filament\Resources\KabkotajabarResource\Pages;

use App\Filament\Resources\KabkotajabarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKabkotajabars extends ListRecords
{
    protected static string $resource = KabkotajabarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
