<?php

namespace App\Filament\Resources\ProvjabarResource\Pages;

use App\Filament\Resources\ProvjabarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProvjabar extends EditRecord
{
    protected static string $resource = ProvjabarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
